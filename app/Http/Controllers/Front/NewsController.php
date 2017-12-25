<?php

namespace App\Http\Controllers\Front;

use App\Model\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
    * retrieve all news and display them with a pagination
    *
    * @return array of news
    */
    public function index()
    {
        $news = News::all();

        return view('front.news.index', compact('news'));
    }
}
