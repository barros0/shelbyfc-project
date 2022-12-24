@extends('layouts.admin.master')


@section('title', 'Categories | Shelby FC')

@section('content')

    <a style="font-size:25px;" href="{{ route('admin.categories.index') }}"><i class='bx bx-left-arrow-alt'></i></a>
    <h1>Nova Categoria</h1>

    <form action="{{ route('admin.categories.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-9">
                <div class="form-group">
                    <label for="name">Nome Da Categoria</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name"
                        required>
                </div>
                <button type="submit" class="btn btn-primary">Inserir</button>
            </div>
        </div>
    </form>

@endsection
