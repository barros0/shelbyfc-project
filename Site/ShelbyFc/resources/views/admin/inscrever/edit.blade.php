@extends('layouts.admin.master')


@section('title', 'Inscrever | Shelby FC')

@section('content')

    <a style="font-size:25px;" href="{{ route('admin.inscrever.index') }}"><i class='bx bx-left-arrow-alt'></i></a>
    <h1>Editar Pacote</h1>

    <form action="{{ route('admin.inscrever.update', $inscrever->id) }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="row">
            <div class="col-lg-9">
                <div class="form-group">
                    <label for="title_new">Nome</label>
                    <input type="text" class="form-control" name="name_new" id="name_new" value="{{ $inscrever->name }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="title_new">Idade</label>
                    <input type="text" class="form-control" name="idade_new" id="idade_new" value="{{ $inscrever->idade }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="title_new">Preço</label>
                    <input type="text" class="form-control" name="preco_new" id="preco_new" value="{{ $inscrever->preco }}"
                        required>
                </div>
                <button type="submit" class="btn btn-primary">Atualizar Pacote</button>
            </div>

    </form>
@endsection
