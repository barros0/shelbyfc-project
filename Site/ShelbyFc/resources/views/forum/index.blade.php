@extends('layouts.forum')

@section('content.forum')
    <div class="">
        <a class="create_forum d-flex flex-row justify-content-around">
            <img class="user_forum_img" src="{{ asset('images/users/' . Auth::user()->image) }}" alt="user_img">
            <div style="width:80%;" class="d-flex flex-column">
                <form action="{{ route('forum.store_post') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input placeholder="O que estás a pensar?" type="text" name="title" id="title" required>
                    <div id="open_forum" style="display:none;">
                        <textarea placeholder="Escreva algo..." name="body" id="body" required></textarea>
                        <div class="d-flex flex-row align-items-center">
                            <input multiple hidden type="file" name="images[]" id="images">
                            <label for="images" class="custom-file-upload"><i class='bx bx-plus'></i></label>
                            <div class="preview_images"></div>
                            <i id="clear" style="display:none;" class='bx bx-x'></i>
                        </div>
                        <button type="submit" id="submit">Publicar</button>
                    </div>
                </form>
            </div>
            <div style="width: 4%">
                <i id="close" style="display:none" class='bx bx-x'></i>
            </div>
        </a>

        <div class="container_forum d-flex flex-column">
            @foreach ($posts as $post)
                <a href="{{ route('forum.post', $post->id) }}" class="container_post">
                    <div class="posts_forum d-flex justify-content-around align-items-center">
                        <div class="user_info_forum">
                            <img class="user_forum_img" src="{{ asset('images/users/' . $post->user->image) }}"
                                alt="user">
                            <div class="content_forum">
                                <p style="font-size: 20px">{{ $post->title }}</p>
                                @foreach ($posts_images as $image)
                                    @if ($image->post_id === $post->id)
                                        <img class="forum_posts_img"
                                            src="{{ asset('images/forum_posts_images/' . $image->image) }}" alt="user">
                                    @endif
                                @endforeach
                                <p>{{ $post->user->name }},
                                    <span style="color: rgb(0 0 0 / 60%);">{{ $post->created_at }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            {{ $post->comments->count() }}
                            Replies
                        </div>
                    </div>
                </a>
            @endforeach

        </div>

        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>Some text in the Modal..</p>
            </div>

        </div>
    </div>

    <script src="{{ asset('js/forum.js') }}"></script>
@endsection
