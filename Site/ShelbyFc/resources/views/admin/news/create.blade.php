@extends('layouts.admin.master')


@section('title', 'News | Shelby FC')

@section('content')
    <h1>Nova noticia</h1>
    <form action="{{ route('admin.news.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title_new">Title</label>
            <input type="text" class="form-control" name="title" id="title_new" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label for="small_description_new">Small Description</label>
            <input type="text" class="form-control" name="small_description" placeholder="Enter Small Description">
        </div>
        <textarea name="body" class="editor"></textarea>
        <div class="form-group">
            <label for="image">Image</label>
            <input class="form-control" name="image" type="file" id="image">
        </div>
        <div class="form-group">
            <label for="categoria">Categories</label>
            @foreach ($categories as $category)
                <input type="checkbox" name="categories[]" id="{{ $category->name }}" value="{{ $category->id }}">
                <label for="{{ $category->name }}">{{ $category->name }}</label>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Inserir</button>
    </form>
@endsection
