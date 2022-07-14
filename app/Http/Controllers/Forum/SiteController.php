<?php

namespace App\Http\Controllers\Forum;

use App\Http\Controllers\Controller;
use App\Models\Forum;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\SubCategory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Reaction;
use App\Models\Reply;
use Illuminate\Support\Facades\Auth;

use function Webmozart\Assert\Tests\StaticAnalysis\object;

class SiteController extends Controller
{
    public function index()
    {
        $forum = $this->forum('Tin tức');
        $newsAndEvents = '';
        if (Auth::check()) {
            $liked = Reaction::where('user_id', Auth::user()->id)->where('reaction', 1)->get();
        } else {
            $liked = '';
        }
        // return $liked;
        foreach ($forum->categories as $item) {
            if ($item->name == 'Tin tức và sự kiện') {
                $newsAndEvents = $item->sub_categories;
            }
        }

        $response = [
            'pageTitle' => 'Forum',
            'newsAndEvents' => json_encode($newsAndEvents),
            'discussion_forum' => json_encode($this->forum('Diễn đàn thảo luận')),
            'last_posts_discussion_forum' => $this->getLastPost(10, 'Diễn đàn thảo luận'),
            'digital_library' => $this->getLastPost(5, 'Thư viện số'),
            'replies' => \json_encode($this->recursive(Comment::find(1)->reply)),
            'liked' => $liked,
        ];

        return view('templates.basic2.index', $response);
    }

    public function test(Request $request)
    {
        $reply = Comment::find(1)->reply;
        return $this->viewTest(['replies'=>$this->recursive($reply)]);

    }

    public function viewTest($res = null)
    {
        return \view('test', $res);
    }

    public function forum($forumName = null)
    {
        $forumName = ($forumName == null || $forumName == '') ? 'Tin tức' : $forumName;
        $forum = DB::table('forums')->where('name', $forumName)->first();
        // return $forum;
        $forumId = $forum->id;
        $cat = $forum->categories = Forum::find($forumId)->category;
        // return $forum;
        $realCat = [];

        foreach ($cat as $item) {
            if ($item->status != 0) {
                $realCat[] = $item;
            }
        }

        $forum->categories = $realCat;
        $forum->total_categories = count($realCat);

        foreach ($forum->categories as $item) {
            $item->sub_categories = $this->subCategory($item->id);
            $item->total_sub_categories = count($this->subCategory($item->id));
            foreach ($item->sub_categories as $value) {
                $value->posts = $this->post($value->id);
                $value->total_posts = count($this->post($value->id));
            }
        }

        return $forum;
    }

    public function subCategory($id)
    {
        return Category::find($id)->subCategory;
    }

    /**
     * Get posts 
     * @param int $id
     * @param int $paginate null
     */
    public function post($id, $paginate = null)
    {
        $subCat = DB::table('sub_categories')->where('id', $id)->first('id');

        if ($paginate == null) {
            $posts = DB::table('posts')->where('sub_category_id', $subCat->id)->where('status', '!=', 0)->orderBy('updated_at', 'DESC')->get();
            $data = $posts;
        } else {
            $posts = DB::table('posts')->where('sub_category_id', $subCat->id)->where('status', '!=', 0)->orderBy('updated_at', 'DESC')->paginate($paginate);
            $data = $posts->items();
        }

        foreach ($data as $item) {
            $item->image = getImage(imagePath()['post']['path'] . '/' . $item->image);
            $item->like = ($item->up_vote - $item->down_vote > 0) ? $item->up_vote - $item->down_vote : 0;
            $item->time = $this->getTime($item->created_at);
            $item->user = Post::find($item->id)->user;
        }

        return $posts;
    }

    public function getTime($time)
    {
        Carbon::setLocale('vi');
        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $time = new Carbon($time);
        return [
            'toDateTimeString' => $time->toDateTimeString(),
            'toFormattedDateString' => $time->toFormattedDateString(),
            'format' => $time->format('l jS \\of F Y h:i:s A'),
            'toDateString' => $time->toDateString(),
            'toTimeString' => $time->toTimeString(),
            'toDateTimeString' => $time->toDateTimeString(),
            'diffForHumans' => $time->diffForHumans($now),
            'now' => $now,
        ];
    }

    public function getLastPost(int $limit, string $forumName)
    {
        $catId = [];
        $subCatId = [];
        $forumId = DB::table('forums')->where('name', $forumName)->first('id')->id;
        $cat = DB::table('categories')->where('forum_id', $forumId)->get('id');
        foreach ($cat as $item) {
            $catId[] = $item->id;
        }
        $subCat = DB::table('sub_categories')->whereIn('category_id', $catId)->get('id');
        foreach ($subCat as $item) {
            $subCatId[] = $item->id;
        }
        $post = DB::table('posts')->whereIn('sub_category_id', $subCatId)->where('status', 1)->limit($limit)->orderBy('updated_at', 'DESC')->get();
        foreach ($post as $item) {
            $item->user = Post::find($item->id)->user;
            $item->time = $this->getTime($item->created_at);
        }

        return $post;
    }

    public function like(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:posts,id',
            'user_id' => 'required',
        ]);
        $post = Post::where('id', $request->id)->where('status', 1)->whereHas('subCategory', function ($subCat) {
            $subCat->where('status', 1)->whereHas('category', function ($cat) {
                $cat->where('status', 1)->whereHas('forum', function ($forum) {
                    $forum->where('status', 1);
                });
            });
        })->first();
        
        if (!$post || $validator->fails()) {
            return response()->json(['success' => false, 'message' => 'Có lỗi xảy ra vui lòng thử lại sau']);
        }

        if (!$user = Auth::user()) {
            return response()->json(['success' => false, 'message' => 'Bạn chưa đăng nhập']);
        }
        $reaction = Reaction::where('user_id', $user->id)->where('post_id', $post->id)->first();
        
        $newReact = '';
        if ($reaction) {
            // return \response()->json(['like' => $reaction->reaction]);
            if ($reaction->reaction == 0) {
                $newReact = 1;
                $post->increment('up_vote');
            } else {
                $newReact = 0;
                if ($post->up_vote > 0) {
                    $post->decrement('up_vote');
                }
            }
            Reaction::where('id', $reaction->id)->where('user_id', $request->user_id)->update(['reaction' => $newReact]);
            $post->save();
            return response()->json([
                'success' => true, 
                'message' => ($reaction->reaction == 0) ? 'Đã quan tâm bài viết này' : 'Đã bỏ quan tâm bài viết này',
                'status' => $reaction->reaction,
                'numberOfLikes' => $post->up_vote
            ]);
        } 
        
        $reaction = Reaction::create([
            'user_id' => $user->id,
            'post_id' => $request->id,
            'reaction' => 1
        ]);
        return response()->json(['success' => true, 'message' => 'Đã quan tâm bài viết này', 'data' => $reaction]);
    }

    public function reply(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'comment_id' => 'required|integer',
            'parent_id' => 'required|integer',
            'user_id' => 'required|integer',
            'reply' => 'required',
        ]);

        if ($validator->fails()) {
            return \response()->json($validator->errors());
        }

        $reply = Reply::create([
            'comment_id' => $request->comment_id,
            'parent_id' => $request->parent_id,
            'user_id' => $request->user_id,
            'reply' => $request->reply
        ]);
        return $reply;
    }

    public function getReply(Request $request)
    {
        return $this->recursive(Reply::all());
    }

    public function recursive($array, $parent_id = 0, $level = 0)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item->parent_id == $parent_id) {
                $item->level = $level;
                $result[] = $item;
                $child = $this->recursive($array, $item->id, $level + 1);
                $result = \array_merge($result, $child);
            }
        }
        
        return $result;
    }

    public function view_dien_dan()
    {
        $response = [
            'pageTitle' => 'Forum'
        ];
        return view('templates.basic2.dien-dan.index', $response);
    }

    public function view_tin_tuc_moi()
    {
    }

    public function view_thu_vien()
    {
        $response = [
            'pageTitle' => 'Forum'
        ];
        return view('templates.basic2.libs.index', $response);
    }

    public function view_su_kien()
    {
        $response = [
            'pageTitle' => 'Forum'
        ];
        return view('templates.basic2.events.index', $response);
    }

    public function view_thanh_vien()
    {
        $response = [
            'pageTitle' => 'Forum'
        ];
        return view('templates.basic2.user', $response);
    }

    public function post_news($slug, $id)
    {
        return Post::find($id);
    }

    public function subCatNews($slug, $id)
    {

        return $this->post($id, 15);
    }
}
