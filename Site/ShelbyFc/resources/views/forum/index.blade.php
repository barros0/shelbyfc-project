@extends('layouts.forum')

@section('content.forum')
    <div class="create_forum d-flex flex-row justify-content-around">
        <img class="user_forum_img" src="{{ asset('images/users/' . Auth::user()->image) }}" alt="user_img">
        <div style="width:80%;" class="d-flex flex-column">
            <form action="{{ route('forum.store_post') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input placeholder="O que estás a pensar?" type="text" name="title" id="title">
                <div id="open_forum" style="">
                    <textarea placeholder="Escreva algo..." name="body" id="body"></textarea>
                    <div class="d-flex flex-row">
                        <img id="img1" class="img_preview" src="" alt="">
                        <input hidden type="file" name="image" id="image">
                        <label for="image" class="custom-file-upload"><i class='bx bx-plus'></i></label>
                    </div>
                    <button type="submit" id="submit">Publicar</button>
                </div>
            </form>
        </div>
        <div style="width: 4%">
            <i id="close" style="display:none" class='bx bx-x'></i>
        </div>
    </div>

    <div class="container_forum d-flex flex-column">
        @foreach ($posts as $post)
            <div class="posts_forum d-flex justify-content-around align-items-center">
                <div class="user_info_forum">
                    <img src="{{ $post->user->image }}" alt="user">
                    <div class="content_forum">
                        <p>{{ $post->title }}</p>
                        <p>{{ $post->user->name }}, {{ $post->created_at }}</p>
                    </div>
                </div>
                <div class="">
                    (XX)
                    Replies
                </div>
            </div>
        @endforeach
    </div>



    <script src="{{ asset('js/forum.js') }}"></script>
@endsection
