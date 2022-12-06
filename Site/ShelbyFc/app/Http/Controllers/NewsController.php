<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\New;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('admin.news.index', compact('categories'));
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
     * @param  \App\Models\New  $news
     * @return \Illuminate\Http\Response
     */
    public function show(New $news)
    {
            return view('admin.news.index', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\New  $new
     * @return \Illuminate\Http\Response
     */
    public function edit(New $new)
    {
        return view('admin.news.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\New  $new
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, New $new)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\New  $new
     * @return \Illuminate\Http\Response
     */
    public function destroy(New $new)
    {
        //
    }
}
