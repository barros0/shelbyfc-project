@extends('layouts.admin.master')


@section('title', 'Categories | Shelby FC')

@section('content')

    <h1>Nova equipa</h1>

    <form action="{{ route('admin.teams.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-9">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" name="nome" id="name" placeholder="Nome" required>
                </div>

                <div class="form-group">
                    <label for="name">Imagem</label>
                    <input type="file" class="form-control" name="imagem" id="name" placeholder="Imagem" required  accept="image/*" >
                </div>
                <button type="submit" class="btn btn-primary">Inserir</button>
            </div>
        </div>
    </form>

@endsection
