<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\News;
use App\Models\User;
use App\Models\Subscription;
use App\Models\Forum_post;
use App\Models\Game;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $news = News::all();
        $user = User::all();
        $contact = Contact::all();
        $subscription = Subscription::all();
        $forum_posts = Forum_post::orderBy('created_at', 'desc')->take(1)->get();
        $games = Game::orderBy('created_at', 'desc')->get();

        return view('admin.index', compact('news', 'user', 'subscription', 'contact', 'forum_posts', 'games'));
    }


    public function contacts()
    {

        $contacts = Contact::orderby('created_at', 'desc')->get();

        return view('admin.contacts.index', compact('contacts'));
    }
}
