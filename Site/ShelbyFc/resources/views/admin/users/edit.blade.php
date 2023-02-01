@extends('layouts.admin.master')


@section('title', 'Categories | Shelby FC')

@section('content')

    <h1>Editar Equipa</h1>

    <form action="{{ route('admin.users.update', $user) }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="row">
            <div class="form-group col-md-6">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" value="{{ $user->name }}"
                       required>
            </div>

            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}"
                       required>
            </div>


            <div class="form-group col-md-6">
                <label for="name">Email</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $user->email }}"
                       required>
            </div>

            <div class="col-lg-3">
                <h3>Estado</h3>
                <div class="form-group">
                    <select name="categorie_id">
                        <option value="1">Pendente</option>
                        <option value="2">Ativo</option>
                        <option value="3">Suspenso</option>
                        <option value="4">Banido</option>
                    </select>
                </div>
            </div>


            <button type="submit" class="btn btn-primary">Inserir</button>
        </div>
    </form>

    <div class="row">

        <form action="{{ route('admin.users.destroy', $user) }}" method="post" enctype="multipart/form-data">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-primary">Eliminar utilizador permanentemente</button>
        </form>
    </div>
@endsection
