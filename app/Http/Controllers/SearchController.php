<?php

namespace App\Http\Controllers;

use App\Search;
use Illuminate\Http\Request;
use DB;
use App\Category;
use App\Author;
use App\Publish;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    
    public function search(Request $request) {
        $text = $request->search;

        $book = DB::table('publishes') ->where('title', 'like', '%'.$text.'%')->orWhere('description','like','%'.$text.'%')->get();
        $authors = DB::table('authors') ->where('name', 'like','%'.$text.'%')->orWhere('biography','like','%'.$text.'%')->get();
        $category = DB::table('categories')->where('name', 'like', '%'.$text.'%')->orWhere('description','like','%'.$text.'%')->get();
       
        $query = $book->union($authors)->union($category);

       
        dd($query);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function show(Search $search)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function edit(Search $search)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Search $search)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function destroy(Search $search)
    {
        //
    }
}
