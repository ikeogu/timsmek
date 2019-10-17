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
use App\Http\Middleware\IsAdmin;


Route::get('/', 'HomeController@first');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'EditorController@index2');
//subdomain for
Route::resource('article', 'ArticleController');
Route::resource('authors','AuthorController');
Route::resource('blog', 'BlogController');
Route::resource('contact','ContactController');
Route::resource('publish', 'PublishController');
Route::resource('editors', 'EditorController');
Route::resource('service', 'ServiceController');
Route::any('search','SearchController@search')->name('search');
Route::resource('category', 'CategoryController');

//download article
Route::get('/downloadPDF/{id}','PublishController@downloadPDF')->name('download');
// search function
Route::post('/search','SearchController@search')->name('search');
//seletec by category
Route::get('/article_category/{key}', 'PublishController@art_cat')->name('art_cat');

//all admin routes
// Route::group(['middleware' => ['auth','admin']], function () {
    //All the admin routes will be defined here...
    Route::get('/adminI','Admin@index')->name('admindashboard');
    Route::get('/allcat','Admin@cat')->name('cat');
    Route::get('/allauthor','Admin@authors')->name('allauth');
    Route::get('/alleditor','Admin@editors')->name('alledit');
    Route::get('/allbooks','Admin@booksPub')->name('books');
    Route::get('/allposts','Admin@blog')->name('blogs');
    Route::get('/allusers','Admin@users')->name('users');
    Route::get('/makeUserAdmin/{key}','Admin@isAdmin')->name('isAdmin');
    Route::get('/RemoveUserAdmin/{key}','Admin@RisAdmin')->name('RisAdmin');

// });
    
 
   

//files download for Articles 
Route::get('/downloadPDF/{id}','ArticleController@downloadPDF')->name('download');
Route::get('/readfile/{id}','ArticleController@readBook')->name('preview');

// for Published article

Route::get('/download/{id}','PublishController@downloadPDF')->name('down');
Route::get('/read/{id}','PublishController@readBook')->name('prev');
