@extends('layouts.admin.master')


@section('title', 'News | Shelby FC')

@section('content')

    <a style="font-size:25px;" href="{{ route('admin.news.index') }}"><i class='bx bx-left-arrow-alt'></i></a>
    <h1>Editar Noticia</h1>

    <form action="{{ route('admin.news.update', $news->id) }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="row">
            <div class="col-lg-9">
                <div class="form-group">
                    <label for="title_new">Title</label>
                    <input type="text" class="form-control" name="title" id="title_new" value="{{ $news->title }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="small_description_new">Small Description</label>
                    <input type="text" class="form-control" name="small_description"
                        value="{{ $news->small_description }}" required>
                </div>
                <textarea name="body" class="editor">{{ $news->body }}</textarea>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input class="form-control" name="image" type="file" id="image">
                </div>
                <button type="submit" class="btn btn-primary">Inserir</button>
            </div>
            <div class="col-lg-3">
                <h3>Categoria</h3>
                <div class="form-group">
                    <select name="categorie_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
    </form>
@endsection
