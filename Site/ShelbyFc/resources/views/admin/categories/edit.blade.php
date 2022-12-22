@extends('layouts.admin.master')


@section('title', 'Categories | Shelby FC')

@section('content')

    <h1>Editar Categoria</h1>

    <form action="{{ route('admin.categories.update', $categories->id) }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="row">
            <div class="col-lg-9">
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $categories->name }}"
                        required>
                </div>
                <button type="submit" class="btn btn-primary">Inserir</button>
            </div>
        </div>
    </form>

@endsection
