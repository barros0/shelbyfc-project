@extends('layouts.master')

@section('title', 'Forúm - Shelby FC')

@section('content')
    <div class="content_post">
        <div>
            <p class="post_date">{{ $post->user->name }},
                <span style="color: rgb(0 0 0 / 60%);">{{ $post->created_at }}</span>
            </p>
            <div class="user_info_forum">
                <img class="post_user_img" src="{{ asset('images/users/' . $post->user->image) }}" alt="user">
                <div class="content">
                    <p style="font-size: 20px; font-weight:bolder;">{{ $post->title }}</p>
                    <p class="post_body">{{ $post->body }}</p>
                    @foreach ($posts_images as $image)
                        @if ($image->post_id === $post->id)
                            <img class="post_img" src="{{ asset('images/forum_posts_images/' . $image->image) }}"
                                alt="user">
                        @endif
                    @endforeach
                </div>
            </div>

        </div>
        <div class="d-flex justify-content-end">
            {{ $post->comments->count() }}
            Comentarios
        </div>
        <div class="create_comment">
            <div class="d-flex flex-column align-items-center">
                <form action="{{ route('forum.do.comment', $post) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input placeholder="Comentar" type="text" name="comment" id="comment" required>
                    <button type="submit" id="submit">Comentar</button>
                </form>
            </div>
        </div>
        <div class="forum_comments">
            @foreach ($post->comments as $comment)
                <div class="d-flex wrap_post_info">
                    <img src="{{ asset('images/users/' . $comment->user->image) }}" alt="img_user">
                    <div class="container_post_info d-flex flex-column">
                        <p style="font-weight: 800;">{{ $comment->user->name }}</p>
                        <div class="post_comment">
                            {{ $comment->comment }}
                            <p class="comment_reply">{{ $comment->replies->count() }} Respostas</p>
                            <form style="display: none;" action="{{ route('forum.reply', $post->id) }}" method="post">
                                @csrf
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                                <input type="text" name="reply" id="reply" placeholder="Responder">
                                <button type="submit">Responder</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="container_replies" style="display: none;">
                    @foreach ($comment->replies as $reply)
                        <div class="d-flex wrap_post_info ml-5">
                            <img src="{{ asset('images/users/' . $reply->user->image) }}" alt="img_user">
                            <div class="container_post_info d-flex flex-column">
                                <p style="font-weight: 800;">{{ $reply->user->name }}</p>
                                <div class="post_comment">
                                    {{ $reply->comment }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
    <script src="{{ asset('js/forum.js') }}"></script>
@endsection

