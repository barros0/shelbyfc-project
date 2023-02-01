@extends('layouts.admin.master')


@section('title', 'Editar utilizador | Shelby FC')

@section('content')

    <h1>Alterar conta de {{$user->name}}</h1>

    <h1>Editar Utilizador</h1>
    <a style="font-size:25px;" href="{{ route('admin.users.index') }}"><i class='bx bx-left-arrow-alt'></i></a>

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
                <label for="name">Nova password</label>
                <input type="text" class="form-control" name="name" id="name"
                       required>
            </div>

            <div class="col-lg-3">
                <h3>Estado</h3>
                <div class="form-group">
                    <select name="estado">
                        <option @if($user->status == 'Pendente') selected @endif value="1">Pendente</option>
                        <option @if($user->status == 'Ativo') selected @endif value="2">Ativo</option>
                        <option @if($user->status == 'Suspenso') selected @endif value="3">Suspenso</option>
                        <option @if($user->status == 'Banido') selected @endif value="4">Banido</option>
                    </select>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary">Inserir</button>
                </div>
            </div>
        </div>
    </form>

    <div class="row">
        <form action="{{ route('admin.users.destroy', $user) }}" method="post" enctype="multipart/form-data">
            @method('delete')
            @csrf
         <div class="col-sm-offset-2 m10" >
             <button type="submit" class="btn btn-primary">Eliminar utilizador permanentemente</button>
         </div>
        </form>
    </div>
@endsection
