<?php

namespace App\Http\Controllers\Front;

use App\Model\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
        $news = News::limit(3)->get();

        return view('front.pages.home', compact('news'));
    }
    
    /**
     * Show contact form
     *
     * @return void
     */
    public function create()
    {
        return view('front.pages.contact');
    }

    /**
     * send the email to the admin
     * save the message to the database
     * @return void
     */
    public function store()
    {
        //
    }


    public function about()
    {
        return view('front.pages.about');
    }
}
