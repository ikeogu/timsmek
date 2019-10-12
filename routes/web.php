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


Route::get('/', 'HomeController@first');
Route::get('/about', function () {
    return view('pages/about');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//subdomain for
Route::resource('article', 'ArticleController');
Route::resource('authors','AuthorController');
Route::resource('blog', 'BlogController');
Route::resource('contact','ContactController');
Route::resource('publish', 'PublishController');
Route::resource('editor', 'EditorController');
Route::any('search','SearchController@search');

//download article
Route::get('/downloadPDF/{id}','PublishController@downloadPDF')->name('download');
// search function
Route::post('/search','SearchController@search')->name('search');
//seletec by category
Route::get('/article_category/{key}', 'PublishController@art_cat')->name('art_cat');

