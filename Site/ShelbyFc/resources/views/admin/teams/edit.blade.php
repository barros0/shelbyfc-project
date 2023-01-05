@extends('layouts.admin.master')


@section('title', 'Categories | Shelby FC')

@section('content')

    <h1>
        <img style="width: 60px" src="{{asset('images/liga/'.$team->image)}}" alt="">
        Editar Equipa</h1>

    <form action="{{ route('admin.teams.update', $team) }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="row">
            <div class="col-lg-9">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input value="{{$team->name}}" type="text" class="form-control" name="nome" id="name" placeholder="Nome" required>
                </div>

                <div class="form-group">
                    <label for="name">Imagem <small>(se não pretender alterar deixe em branco)</small></label>
                    <input type="file" class="form-control" name="imagem" id="name" placeholder="Imagem"  accept="image/*" >
                </div>
                <button type="submit" class="btn btn-primary">Inserir</button>
            </div>
        </div>
    </form>

@endsection
