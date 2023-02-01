@extends('layouts.admin.master')


@section('title', 'Publicações Forum | Shelby FC')

@section('content')


    <h1>Posts</h1>

    <div class="table-responsive">
        <table class="datatable">
            <thead>
                <tr class="header">
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Corpo</th>
                    <th>Ver</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->body }}</td>
                        <td><a href="{{ route('admin.forum_posts.show', $post) }}">Ver</a></td>
                        <td>
                            <form action="{{ route('admin.forum_posts.destroy', $post) }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit"><i class='bx bx-trash'></i></button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>


@endsection
