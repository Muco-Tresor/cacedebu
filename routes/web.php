<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/***** Home Route ***** */
Route::get('/', "Front\PagesController@home")->name('pages.home');

/***** Contact Routes ***** */
Route::get('contact', "Front\PagesController@create")->name('pages.contact');
Route::post('contact', "Front\PagesController@store")->name('store.contact');

/***** About Route ***** */
Route::get('about', "Front\PagesController@about")->name('pages.about');

/***** News Routes ***** */
Route::get('news', "Front\NewsController@index")->name('news.index');


