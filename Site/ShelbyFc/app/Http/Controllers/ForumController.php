<?php

namespace App\Http\Controllers;

use App\Models\forum_posts_comment;
use App\Models\Forum_post;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Session;

class ForumController extends Controller
{

    public function index()
    {
        $posts = Forum_post::get();
        return view('forum.index', compact('posts'));
    }

    public function posts_user($user_id)
    {
        $user_id = Forum_post::where('name', $user_id)->firstOrFail();

        return view('forum.index', compact('user_id'));
    }

    public function create(Request $request)
    {
        $posts = Forum_post::all();
        return view('forum.index', compact('posts'));
    }

    public function store_post(Request $request)
    {
        return $request;
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'gallery-photo-add' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);

        $forum_posts = new Forum_post();
        $user_id = Auth::user()->id;
        $forum_posts->user_id = $user_id;
        $forum_posts->title = $request->title;
        $forum_posts->body = $request->body;
        $forum_posts->save();

        Session::flash('success', 'Publicação adicionada!');
        return back();
    }


    public function post(Forum_post $post)
    {
        return view('forum.post', compact('post'));
    }

    public function delete_post(Forum_post $post)
    {

        if ($post->user_id <> Auth::id()) {
            Session::flash('success', 'Publicação impossivel apagar esta publicação.');
            return back();
        }

        $post->delete();

        Session::flash('success', 'Publicação apagada.');
        return back();
    }


    public function addcomment(Request $request, $postid)
    {

        Forum_post::findorfail($postid);

        $comment = new forum_posts_comment();
        $comment->user_id = Auth::id();
        $comment->post_id = $postid;
        $comment->comment = $request->comment;
        $comment->save();

        return back();
    }

    public function reply(Request $request, $postid, $commentid)
    {

        Forum_post::findorfail($postid);
        forum_posts_comment::findorfail($commentid);

        $comment = new forum_posts_comment();
        $comment->user_id = Auth::id();
        $comment->post_id = $postid;
        $comment->comment = $request->comment;
        $comment->reply_id = $commentid;
        $comment->save();

        return back();
    }

    public function delete_comment(Request $request, $commentid)
    {

        $comment = forum_posts_comment::findorfail($commentid);

        // se o coment nao for desse user
        if ($comment->user_id <> Auth::id()) {
            Session::flash('error', 'Este comentário não lhe pertence!');
            return back();
        }

        $comment->destroy();

        return back();
    }
}
