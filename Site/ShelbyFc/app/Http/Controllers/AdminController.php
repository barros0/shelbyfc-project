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
        $news = News::count();
        $users = User::count();
        $contact = Contact::count();
        $subscription = Subscription::Active()->count();
        $forum_posts = Forum_post::orderBy('created_at', 'desc')->first();

        $lastgames = Game::orderBy('datetime_game', 'desc')->LastGames()->get()->take(2);
        $nextgames = Game::orderBy('datetime_game', 'desc')->NextGames()->get()->take(2);

        return view('admin.index', compact('news', 'users', 'subscription', 'contact', 'forum_posts', 'lastgames','nextgames'));
    }

}
