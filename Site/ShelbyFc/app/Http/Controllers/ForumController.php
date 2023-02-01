<?php

namespace App\Http\Controllers;

use App\Models\forum_posts_comment;
use App\Models\Forum_posts_images;
use App\Models\Forum_post;
use Illuminate\Http\Request;
use Auth;
use Session;

class ForumController extends Controller
{

    public function index()
    {
        $posts = Forum_post::orderBy('created_at', 'desc')->get();
        $posts_images = Forum_posts_images::get();

        return view('forum.index', compact('posts', 'posts_images'));
    }

    public function post(Forum_post $post)
    {
        $posts_images = Forum_posts_images::get();
        return view('forum.post', compact('post', 'posts_images'));
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
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $forum_posts = new Forum_post();
        $user_id = Auth::user()->id;
        $forum_posts->user_id = $user_id;
        $forum_posts->title = $request->title;
        $forum_posts->body = $request->body;
        $forum_posts->save();

        $images = $request->file('images');
        if (!empty($images)) {
            foreach ($images as $image) {
                if ($image->isValid()) {
                    $extension = $image->getClientOriginalExtension();
                    $image_name = uniqid() . '.' . $extension;
                    $image->move(public_path('images/forum_posts_images'), $image_name);
                }
                $forum_images = new Forum_posts_images();
                $post_id = $forum_posts->id;
                $forum_images->post_id = $post_id;
                $forum_images->image = $image_name;
                $forum_images->save();
            }
        }

        Session::flash('success', 'Publicação adicionada!');
        return back();
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


    public function docomment(Request $request, Forum_post $post)
    {

        //Forum_post::findorfail($postid);

        $comment = new forum_posts_comment();
        $comment->user_id = Auth::id();
        $comment->post_id = $post->id;
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
