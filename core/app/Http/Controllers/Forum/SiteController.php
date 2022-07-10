<?php

namespace App\Http\Controllers\Forum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $arr = [
            'pageTitle' => 'pageTitle'
        ];
        return view('templates.basic2.home', $arr);
    }
}
