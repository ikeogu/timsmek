<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::paginate(10);
        return view('blog/index',['blog'=>$blog]);
    }
    public function index2()
    {
        $blog = Blog::all();
        return view('admin/allpost',['blog'=>$blog]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blog/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'caption'=> 'required',
            'body'=> 'required'
        ]);
        if($request->hasFile('image')){
            //get file name with extension
            $fileNameWithExt = $request->file('cover_page_front')->getClientOriginalName();
            //get just file name
            $filenames = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filenames.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('image')->storeAs('public/blog_post/', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $blog = new Blog();
        $blog->image = $fileNameToStore;
        $blog->caption = $request->caption;
        $blog->body = $request->body;
        $blog->writter = $request->writter;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($blog)
    {
        //
        $blog = Blog::find($blog);
        return view('blog/show',['blog'=>$blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($blog)
    {
        //
        $blog = Blog::find($blog);
        return view('blog/edit',['blog'=>$blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $blog)
    {
        //
        Blog::whereId($blog)->update($request->except(['_method','_token']));
        return redirect(route('blog.edit'))->with('success','Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($blog)
    {
        //
        $blog = Blog::find($blog);
        $blog->delete();
        return redirect(route('blog'))->wih('Danger','Post Deleted');
    }
}
