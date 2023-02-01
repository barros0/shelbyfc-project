@extends('layouts.admin.master')


@section('title', 'Dashboard | Shelby FC')

@section('content')


    <h1>Bem vindo, {{ Auth::user()->name }}!</h1>

    <div class="container_boxes">
        <div class="box">
            <i class='bx bx-user'></i>
            <p>{{ $users}} Users</p>
        </div>
        <div class="box">
            <i class='bx bx-news'></i>
            <p>{{ $news}} Noticias</p>
        </div>
        <div class="box">
            <i class='bx bx-crown'></i>
            <p>{{ $subscription}} Socios</p>
        </div>
        <div class="box">
            <i class='bx bx-phone'></i>
            <p>{{ $contact}} Contactos</p>
        </div>
    </div>

    <div class="container_recent">
        <div class="recent_box">
            <h3>Proximos 2 Jogos</h3>
            <div class="content_post">
                @foreach ($nextgames as $game)
                    <p>SHELBY FC vs. {{ $game->opponent->name }}</p>
                    <p>Bilhetes Restantes - {{ $game->stock_tickets }}</p>
                    <br>
                @endforeach
            </div>
        </div>
        <div class="recent_box">
            <h3>Ultimos 2 Jogos</h3>
            <div class="content_post">
                @foreach ($lastgames as $game)
                        <p>SHELBY FC vs. {{ $game->opponent->name }}</p>
                        <p>{{ $game->result_home }} : {{ $game->opponent->name }}</p>
                        <br>
                @endforeach

            </div>
        </div>
    </div>

    <div class="forum_recent_box">
        <h3>Forum Post Mais Recente</h3>
        <div class="content_post">
                <p>{{ $forum_post->title }} - {{ $forum_post->created_at }}</p>
                <p>{{ $forum_post->body }}</p>
        </div>
    </div>
@endsection
