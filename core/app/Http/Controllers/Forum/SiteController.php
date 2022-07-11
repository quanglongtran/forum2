<?php

namespace App\Http\Controllers\Forum;

use App\Http\Controllers\Controller;
use App\Models\Forum;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index()
    {
        // return $this->discussionForum();
        $newsAndEventsId = Category::where('name', 'Tin tức và sự kiện')->first();
        $discussion_forums = $this->discussionForum();
        // return $discussion_forums;
        $discussion_forums->sub_categories = $this->subCategory($discussion_forums->id);
        $discussion_forums->number_of_subcategories = count($discussion_forums->sub_categories);
        
        $newsAndEvents = $this->subCategory($newsAndEventsId->id);

        foreach ($newsAndEvents as $item) {
            $item->posts = $this->post($item->id);
        };

        foreach ($discussion_forums->sub_categories as $item) {
            $item->posts = $this->post($item->id);
            $item->number_of_posts = count($item->posts);
        }

        $response = [
            'pageTitle' => 'Forum',
            'newsAndEvents' => $newsAndEvents,
            'discussion_forum' => $discussion_forums,
        ];

        return view('templates.basic2.index', $response);
    }

    public function test()
    {
        $newsAndEventsId = Category::where('name', 'Tin tức và sự kiện')->first();
        $discussion_forums = $this->discussionForum();
        $discussion_forums->sub_categories = $this->subCategory($discussion_forums->id);
        $discussion_forums->number_of_subcategories = count($discussion_forums->sub_categories);
        
        $newsAndEvents = $this->subCategory($newsAndEventsId->id);

        $createdTime = new Carbon('2022-07-11T00:52:13.000000Z');
        Carbon::setLocale('vi');
        $now = Carbon::now();
        // return $createdTime->diffForHumans($now);
        foreach ($newsAndEvents as $item) {
            $item->posts = $this->post($item->id);
        };

        foreach ($discussion_forums->sub_categories as $item) {
            $item->posts = $this->post($item->id);
            $item->number_of_posts = count($item->posts);
            // $item->posts->image = getImage(imagePath()['profile']['user']['path']).'/'.$item->posts->image;
        }

        $response = [
            'pageTitle' => 'Forum',
            'newsAndEvents' => $newsAndEvents,
            'discussion_forum' => $discussion_forums,
        ];
        // return getImage(imagePath()['profile']['user']['path']);
        return $response;
    }

    public function view_dien_dan()
    {
        $response = [
            'pageTitle' => 'Forum'
        ];
        return view('templates.basic2.dien-dan.index', $response);
    }

    public function view_thu_vien()
    {
        $response = [
            'pageTitle' => 'Forum'
        ];
        return view('templates.basic2.thu-vien.index', $response);
    }

    public function view_su_kien()
    {
        $response = [
            'pageTitle' => 'Forum'
        ];
        return view('templates.basic2.su-kien.index', $response);
    }

    public function view_thanh_vien()
    {
        $response = [
            'pageTitle' => 'Forum'
        ];
        return view('templates.basic2.thanh-vien', $response);
    }

    public function discussionForum()
    {
        return DB::table('categories')->where('name', 'Diễn đàn thảo luận')->first();
    }

    public function subCategory($id)
    {
        return Category::find($id)->subCategory;
    }

    public function post($id)
    {
        $posts = SubCategory::find($id)->post;
        foreach ($posts as $item) {
            $item->image = getImage(imagePath()['post']['path'].'/'.$item->image);
            $item->time = $this->getTime($item->created_at);
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
}
