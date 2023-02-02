@extends('layouts.admin.master')


@section('title', 'Inscrever | Shelby FC')

@section('content')

    <h1>Novo Pacote</h1>
    <a style="font-size:25px;" href="{{ route('admin.inscrever.index') }}"><i class='bx bx-left-arrow-alt'></i></a>
    <form action="{{ route('admin.inscrever.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-9">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" name="nome" id="name" placeholder="Nome" required>
                </div>
                <div class="form-group">
                    <label for="title_new">Idade minima</label>
                    <input type="text" class="form-control" name="idade_minima" id="idade_new"
                           required>
                </div>

                <div class="form-group">
                    <label for="title_new">Idade máxima</label>
                    <input type="text" class="form-control" name="idade_maxima" id="idade_new"
                           required>
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
