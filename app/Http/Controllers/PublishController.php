<?php

namespace App\Http\Controllers;

use App\Publish;
use App\Category;
use App\Author;
use Illuminate\Http\Request;

class PublishController extends Controller
{
    public function __constructor(){
        $this->middleware('auth')->except(['index','show','downloadPDF','readBook']);
    }
    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['index','show']);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
        //
        
        $cat = Category::with('publish')->get();
        $book = Publish::with('author')->get();
        //dd($book);
        // $book_cat = Publish::with('category')->get();
        return view('store/index',['book'=>$book,'cat'=>$cat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cat = Category::all();
        $author = Author::all();
        return view('admin/pub_book',['author'=>$author,'cat'=>$cat]);
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
            'title'=> 'required',
            'price' => 'required',
            'year_pub' =>'required',
            'description'=> 'required',
        ]);

        if($request->hasFile('content')){
            //get file name with extension
            $fileNameWithExt = $request->file('content')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just extension
            $extension =  $request->file('content')->getClientOriginalExtension();
            //file name to store
            $fileNameToSave = $filename.'_'.time().'.'.$extension;
            //upload image
            $path =  $request->file('content')->storeAs('public/publish/', $fileNameToSave);
        }else{
            $fileNameToSave= 'nofile.mime';
        }
        if($request->hasFile('cover_page')){
            //get file name with extension
            $fileNameWithExt = $request->file('cover_page')->getClientOriginalName();
            //get just file name
            $filenames = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('cover_page')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filenames.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('cover_page')->storeAs('public/cover_page/', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        
        $book = new Publish();
        $book->title = $request->title;
        $book->price = $request->price;
        $book->available = $request->available;
        $book->year_pub = $request->year_pub;
        $book->isbn = $request->isbn;
        
        $book->category_id = $request->category_id;
        $book->description = $request->description;
        if($book->price == 0){
            $book->status = 0;
        }elseif ($book->price !== 0) {
            # code...
            $book->status = 1;
        }
         

        $book->author_id = $request->author_id;
        
        $book->content = $fileNameToSave;
        $book->cover_page = $fileNameToStore;
        if($book->save()){
         return redirect(route('publish.create'))->with('success','Book Published');
        }
    }

    // public function setAuthor(Publish $author) 
    // {
    //      $this->author_id = $player->id;
    // }
    /**
     * Display the specified resource.
     *
     * @param  \App\Publish  $publish
     * @return \Illuminate\Http\Response
     */
    public function show($publish)
    {
        //
        $sbook = Publish::find($publish);
        return view('store/show',['book'=>$sbook]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publish  $publish
     * @return \Illuminate\Http\Response
     */
    public function edit($publish)
    {
        $cat = Category::all();
        $author = Author::all();
        $book = Publish::find($publish);
        return view('admin/editbook',['book'=>$book,'cat'=>$cat,'author'=>$author]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publish  $publish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $publish)
    {
        //
        Publish::whereId($publish)->update($request->except(['_method','_token']));
        return redirect(route('boooks'))->with('success','Book Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publish  $publish
     * @return \Illuminate\Http\Response
     */
    public function destroy( $publish)
    {
        //
        $book = Publish::find($publish);
        $book->delete();
        return redirect(route('books'))->with('success','Book Updated');
    }

    public function downloadPDF($id){
        $article= Publish::find($id);
        //dd($article);
        $file_path = public_path('storage/publish/'.$article->content);
        return response()->download($file_path);
    }

    public function art_cat($id){
        $book = Publish::find($id);
        return view('store/index',['book'=> $book]);
    }

    // public function recentPu(){
        
    //     return
    // }

}
