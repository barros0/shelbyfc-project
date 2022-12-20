@extends('layouts.admin.master')


@section('title', 'News | Shelby FC')

@section('content')
    <h1>Nova noticia</h1>
    <form action="{{ route('admin.news.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-9">
                <div class="form-group">
                    <label for="title_new">Title</label>
                    <input type="text" class="form-control" name="title" id="title_new" placeholder="Enter Title"
                        required>
                </div>
                <div class="form-group">
                    <label for="small_description_new">Small Description</label>
                    <input type="text" class="form-control" name="small_description"
                        placeholder="Enter Small Description" required>
                </div>
                <textarea name="body" class="editor"></textarea>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input class="form-control" name="image" type="file" id="image" required>
                </div>
                <button type="submit" class="btn btn-primary">Inserir</button>
            </div>
            <div class="col-lg-3">
                <h3>Categorias</h3>
                <div class="form-group">
                    @foreach ($categories as $category)
                        <div class="d-flex">
                            <input style=" width:auto; margin:0 10px 0 0 !important; padding:0 !important; " type="checkbox"
                                name="categories[]" id="{{ $category->name }}" value="{{ $category->id }}">
                            <label for="{{ $category->name }}">{{ $category->name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
    </form>
@endsection
