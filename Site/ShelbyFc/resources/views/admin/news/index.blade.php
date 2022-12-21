@extends('layouts.admin.master')


@section('title', 'News | Shelby FC')

@section('content')


    <h1>Noticias</h1>
    <div class="form-menu d-flex justify-content-between">
        <div class="form-search">
            <input type="text" name="" class="form-control" placeholder="Search">
        </div>
        <a href="{{ route('admin.news.create') }}" class="btn">Adicionar</a>
    </div>
    <table>
        <tbody>
            <tr class="header">
                <th>ID</th>
                <th>Title</th>
                <th>IMG</th>
                <th>Category</th>
                <th>Views</th>
                <th>Actions</th>
            </tr>
            @foreach ($news as $new)
                <!--para cada registo de pacote-->
                <tr>
                    <td>{{ $new->id }}</td>
                    <td>{{ $new->title }}</td>
                    <td>{{ $new->image }}</td>
                    <td>{{ $new->category }}</td>
                    <td>{{ $new->views }}</td>
                    <td>
                        <a href="{{ route('admin.news.edit', $new) }}" class="btn"><i class='bx bx-edit-alt'></i></a>
                        <a href="{{ route('admin.news.create') }}" class="btn"><i class='bx bx-trash'></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



@endsection
