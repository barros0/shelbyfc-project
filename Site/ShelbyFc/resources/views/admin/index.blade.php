@extends('layouts.admin.master')


@section('title', 'Dashboard | Shelby FC')

@section('content')


    <h1>Bem vindo, {{ Auth::user()->name }}!</h1>

    <div class="container_boxes">
        <div class="box">
            <i class='bx bx-user'></i>
            <p>{{ $user->count() }} Users</p>
        </div>
        <div class="box">
            <i class='bx bx-news'></i>
            <p>{{ $news->count() }} Noticias</p>
        </div>
        <div class="box">
            <i class='bx bx-crown'></i>
            <p>{{ $subscription->count() }} Socios</p>
        </div>
        <div class="box">
            <i class='bx bx-phone'></i>
            <p>{{ $contact->count() }} Contactos</p>
        </div>
    </div>

    <div class="container_recent">
        <div class="recent_box">
            <h3>Proximo Jogo</h3>
            <div class="content_post">
                @foreach ($games as $game)
                    <p>Bilhetes Restantes - {{ $game->stock_tickets }}</p>
                    <p>SHELBY FC vs. {{ $game->opponent->name }}</p>
                @endforeach
            </div>
        </div>
        <div class="recent_box">
            <h3>Ultimo Jogo</h3>
            <div class="content_post">
                @foreach ($games as $game)
                    <p>Bilhetes Restantes - {{ $game->stock_tickets }}</p>
                    <p>SHELBY FC vs. {{ $game->opponent->name }}</p>
                @endforeach
            </div>
        </div>
    </div>

    <div class="recent_box">
        <h3>Forum Post Mais Recente</h3>
        <div class="content_post">
            @foreach ($forum_posts as $forum_post)
                <p>{{ $forum_post->title }} - {{ $forum_post->created_at }}</p>
                <p>{{ $forum_post->body }}</p>
            @endforeach
        </div>
    </div>
@endsection
