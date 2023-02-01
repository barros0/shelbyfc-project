<?php

namespace App\Http\Controllers;

use App\Models\Forum_posts_images;
use App\Models\Forum_post;
use Illuminate\Http\Request;
use Session;

class AdminForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Forum_post::all();
        $posts_images = Forum_posts_images::get();

        return view('admin.forum_posts.index', compact('posts', 'posts_images'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Forum_post $forum_post)
    {
        $posts_images = Forum_posts_images::get();

        return view('admin.forum_posts.show', compact('forum_post', 'posts_images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum_post $forum_post)
    {
        $forum_post->delete();

        Session::flash('success', 'Post Eliminado!');
        return back();
    }
}
