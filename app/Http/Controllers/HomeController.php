<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Publish;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['first']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function first(){
        $blog = Blog::paginate(3);
        $book = Publish::paginate(10);
        $recent = Publish::latest()->take(8)->get();
        return view('pages/index',['blog'=>$blog, 'book'=>$book,'recent'=>$recent]);

    }

    public function recent(){
        $recent = Publish::latest()->take(8)->get();;
        return view('partials/sidebar',['recent'=>$recent]);
   
    }
}
