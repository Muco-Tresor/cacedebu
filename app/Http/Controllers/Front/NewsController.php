<?php

namespace App\Http\Controllers\Front;

use App\Model\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use MercurySeries\Flashy\Flashy;

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

    /**
     * get a news post by its identifical
     *
     * @param [type = int] $id
     * @return void
     */
    public function newsPost(int $id)
    {
        $news = News::where('id', $id)->first();

        if($news)
        {
            return view('front.news.post', compact('news'));
        }

        Flashy::message('The news you are looking for could not be found');

        return Redirect()->route('pages.home');
    }
}
