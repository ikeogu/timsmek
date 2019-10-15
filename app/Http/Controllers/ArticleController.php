<?php

namespace App\Http\Controllers;


use App\Article;
use App\Publish;
use Illuminate\Http\Request;
use Auth;

class ArticleController extends Controller
{   public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $art = Article::all();
        return view('admin/allarticles',['article'=>$art]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recent = Publish::latest()->take(8)->get();;
         return view('pages/up_aricle',['recent'=>$recent]);
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->Validate(request(),[
            'name' => 'required',
            'email'=> 'required',
            'content' => 'required'
        ]);
        if($request->hasFile('content')){
            //get file name with extension
            $fileNameWithExt = $request->file('content')->getClientOriginalName();
            //get just file name
            $filenames = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('content')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filenames.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('content')->storeAs('public/article_Content/', $fileNameToStore);
        }else{
            $fileNameToStore = 'nofile.pdf';
        }


        $article = new Article();
        $article->title = $request->title;
        $article->email = $request->email;
        $article->name = $request->name;
        $article->content = $fileNameToStore;
        $article->category_id = $request->cat_id;
        //assign <code class=""></code>
       
        $article->code = date("Y").$article->count() + 1;
        

        if($article->save()){
            return redirect(route('article.create'))->with('success', 'Article Sent. Wait for our Response');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($article)
    {
        //
        $art = Article::find($article);
        return view('article/show',['art'=>$art]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($article)
    {
        //
        $art = Article::find($article);
        return view('article/edit',['art'=>$art]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $article)
    {
        //
        Article::whereId($article)->update($request-except(['_token', '_method']));
        return redirect(route('article.edit'))->with('success','Article Updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($article)
    {
        $art = Article::find($article);
        $art->delete();
        return redirect(route('artilce.index'))->with('sucess','Article Deleted');
    }

    
}