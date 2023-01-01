<?php

namespace App\Http\Controllers;

use App\Models\forum_posts_comment;
use App\Models\Posts;
use Illuminate\Http\Request;
use Auth;
use Session;

class ForumController extends Controller
{

    public function index(){

        return view('forum.index');
    }


    public function post(Posts $post){

        return view('forum.post', compact('post'));
    }


    public function addcomment(Request $request, $postid){

        Posts::findorfail($postid);

        $comment = new forum_posts_comment();
        $comment->user_id = Auth::id();
        $comment->post_id = $postid;
        $comment->comment = $request->comment;
        $comment->save();

        return back();
    }

    public function reply(Request $request,$postid,$commentid){

        Posts::findorfail($postid);
        forum_posts_comment::findorfail($commentid);

        $comment = new forum_posts_comment();
        $comment->user_id = Auth::id();
        $comment->post_id = $postid;
        $comment->comment = $request->comment;
        $comment->reply_id = $commentid;
        $comment->save();

        return back();
    }

    public function delete_comment(Request $request,$commentid){

        $comment = forum_posts_comment::findorfail($commentid);

        // se o coment nao for desse user
        if($comment->user_id <> Auth::id()){
            Session::flash('error','Este comentário não lhe pertence!');
            return back();
        }

        $comment->destroy();

        return back();
    }
}
