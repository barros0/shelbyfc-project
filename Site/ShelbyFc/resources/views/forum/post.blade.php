@extends('layouts.master')

@section('title', 'Forúm - Shelby FC')

@section('content')
    <div class="content_post">
        <div class="posts_forum">
            <div class="user_info_forum">
                <img class="user_forum_img" src="{{ asset('images/users/' . $post->user->image) }}" alt="user">
                <div class="content_forum">
                    <p style="font-size: 20px">{{ $post->title }}</p>
                    @foreach ($posts_images as $image)
                        @if ($image->post_id === $post->id)
                            <img class="forum_posts_img" src="{{ asset('images/forum_posts_images/' . $image->image) }}"
                                alt="user">
                        @endif
                    @endforeach
                    <p>{{ $post->user->name }},
                        <span style="color: rgb(0 0 0 / 60%);">{{ $post->created_at }}</span>
                    </p>
                </div>
            </div>

        </div>
        <div class="">
            ({{ $post->comments->count() }})
            Replies
        </div>
    </div>
@endsection
