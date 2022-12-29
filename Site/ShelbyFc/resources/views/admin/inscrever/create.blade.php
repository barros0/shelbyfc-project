@extends('layouts.admin.master')


@section('title', 'Inscrever | Shelby FC')

@section('content')

    <h1>Novo Pacote</h1>

    <form action="{{ route('admin.inscrever.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-9">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nome" required>
                </div>
                <div class="form-group">
                    <label for="name">Idade</label>
                    <input type="text" class="form-control" name="idade" id="idade" placeholder="Idade" required>
                </div>
                <div class="form-group">
                    <label for="name">Preço</label>
                    <input type="num" class="form-control" name="preco" id="preco" placeholder="Enter Price" required>
                </div>
                <button type="submit" class="btn btn-primary">Inserir</button>
            </div>
        </div>
    </form>

@endsection
