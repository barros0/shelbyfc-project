@extends('layouts.admin.master')


@section('title', 'Forum Posts | Shelby FC')

@section('content')
    <a style="font-size:25px;" href="{{ route('admin.forum_posts.index') }}"><i class='bx bx-left-arrow-alt'></i></a>

    <h1>POST {{ $forum_post->id }}</h1>
    <div class="container_post">
        <h4>CONTEUDO DO POST</h4>
        <div class="d-flex wrap_post_info">
            <img src="{{ asset('images/users/' . $forum_post->user->image) }}" alt="img_user">
            <div class="container_post_info d-flex flex-column">
                <p style="font-weight: 800;">{{ $forum_post->user->name }}</p>
                <div class="post_comment">
                    {{ $forum_post->title }}
                    <p class="comment_reply">{{ $forum_post->body }} Respostas</p>
                </div>
            </div>

        </div>
        @foreach ($posts_images as $image)
            @if ($image->post_id === $forum_post->id)
                <img class="post_img" src="{{ asset('images/forum_posts_images/' . $image->image) }}" alt="user">
            @endif
        @endforeach
        <form action="{{ route('admin.forum_posts.destroy', $forum_post) }}" method="post">
            @method('delete')
            @csrf
            <button type="submit"><i class='bx bx-trash'></i></button>
        </form>
    </div>
    <div class="container_comments">
        <h4>COMENTARIOS</h4>
        @foreach ($forum_post->comments as $comment)
            <div class="d-flex wrap_post_info">
                <img src="{{ asset('images/users/' . $comment->user->image) }}" alt="img_user">
                <div class="container_post_info d-flex flex-column">
                    <p style="font-weight: 800;">{{ $comment->user->name }}</p>
                    <div class="post_comment">
                        {{ $comment->comment }}
                        <p class="comment_reply">{{ $comment->replies->count() }} Respostas</p>
                    </div>
                </div>
            </div>
            <form action="{{ route('admin.comments.destroy', $comment) }}" method="post">
                @method('delete')
                @csrf
                <button type="submit"><i class='bx bx-trash'></i></button>
            </form>
            <div class="container_replies">
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
                    <form action="{{ route('admin.replies.destroy', $reply) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit"><i class='bx bx-trash'></i></button>
                    </form>
                @endforeach
            </div>
        @endforeach
    </div>

@endsection
