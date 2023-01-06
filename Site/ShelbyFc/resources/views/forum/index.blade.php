@extends('layouts.forum')


@section('content.forum')
    <div class="create_forum d-flex flex-row">
        <img src="{{ asset('images/users/' . Auth::user()->image) }}" alt="user_img">
        <form action="###################">
            <input placeholder="Escreva um titutlo" type="text" name="title" id="title">
            <textarea placeholder="Escreva algo..." name="body" id="body"></textarea>
            <input type="file" name="image" id="image">
            <button type="submit">Publicar</button>
        </form>
    </div>

    <div class="container_forum d-flex flex-column">
        <div class="posts_forum d-flex justify-content-around align-items-center">
            <div class="user_info_forum">
                <img src="" alt="user">
                <div class="content_forum">
                    <p>Title</p>
                    <p>(NOME DA PESSOA), (data do post)</p>
                </div>
            </div>
            <div class="">
                (XX) Replies
            </div>
        </div>
    </div>
    @foreach ($posts as $post)
        {!! $post->body !!}
    @endforeach
@endsection
