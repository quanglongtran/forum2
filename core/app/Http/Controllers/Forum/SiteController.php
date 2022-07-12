<?php

namespace App\Http\Controllers\Forum;

use App\Http\Controllers\Controller;
use App\Models\Forum;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\SubCategory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index()
    {
        $forum = $this->forum('Tin tức');
        $newsAndEvents = '';
        
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
            'digital_library' => $this->getLastPost(5,'Thư viện số'),
        ];

        return view('templates.basic2.index', $response);
    }

    public function test()
    {
        $forum = $this->forum('Tin tức');
        $newsAndEvents = '';
        
        foreach ($forum->categories as $item) {
            if ($item->name == 'Tin tức và sự kiện') {
                $newsAndEvents = $item->sub_categories;
            }
        }
        
        $response = [
            'pageTitle' => 'Forum',
            'newsAndEvents' => ($newsAndEvents),
            'discussion_forum' => ($this->forum('Diễn đàn thảo luận')),
            'last_posts_discussion_forum' => $this->getLastPost(10, 'Diễn đàn thảo luận'),
            'digital_library' => $this->getLastPost(5,'Thư viện số'),
        ];
        return $response;
    }

    public function forum($forumName = null)
    {
        $forumName = ($forumName == null || $forumName == '') ? 'Tin tức' : $forumName;
        $forum = DB::table('forums')->where('name', $forumName)->first();
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
        $post = DB::table('posts')->whereIn('sub_category_id', $subCatId)->limit($limit)->orderBy('updated_at', 'DESC')->get();
        foreach ($post as $item) {
            $item->user = Post::find($item->id)->user;
            $item->time = $this->getTime($item->created_at);
        }

        return $post;
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
