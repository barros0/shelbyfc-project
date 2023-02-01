@extends('layouts.master')

@section('title', 'Forúm - Shelby FC')

@section('content')
    <div class="content_post">
        <div>
            <p>{{ $post->user->name }},
                <span style="color: rgb(0 0 0 / 60%);">{{ $post->created_at }}</span>
            </p>
            <div class="user_info_forum">
                <img class="post_user_img" src="{{ asset('images/users/' . $post->user->image) }}" alt="user">
                <div class="content">
                    <p style="font-size: 20px; font-weight:bolder;">{{ $post->title }}</p>
                    <p style="font-size: 20px">{{ $post->body }}</p>
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
            Replies
        </div>
        <div class="create_comment">
            <div class="d-flex flex-column align-items-center">
                <form action="{{ route('forum.do.comment', $post) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input placeholder="Comentário" type="text" name="comment" id="comment" required>
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
                        <p>{{ $comment->comment }}</p>
                    </div>
                    @foreach ($comment->replies as $reply)
                        {{ $reply->comment }}
                    @endforeach
                </div>
            @endforeach
        </div>

    </div>
@endsection
