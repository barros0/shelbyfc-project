@extends('layouts.admin.master')


@section('title', 'Novo jogo | Shelby FC')

@section('content')

    <a style="font-size:25px;" href="{{ route('admin.games.index') }}"><i class='bx bx-left-arrow-alt'></i></a>
    <h1>Novo jogo</h1>

    <form action="{{ route('admin.games.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div class="form-group col-md-6">
                <label for="title_new">Title</label>
                <input type="text" class="form-control" name="titulo" id="title_new" placeholder="Enter Title"
                       required>
            </div>
            <div class="form-group col-md-6">
                <label for="small_description_new">Small Description</label>
                <input type="text" class="form-control" name="small_description"
                       placeholder="Enter Small Description" required>
            </div>

            <div class="form-group col-md-6">
                <label for="small_description_new">Description</label>
                <textarea name="description" class="editor"></textarea>
            </div>


            <div class="form-group col-md-6">
                <label for="">Stock bilhetes</label>
                <input class="form-control" name="stock_bilhetes" type="number" required>
            </div>

            <div class="form-group col-md-6">
                <label for="data_jogo">Data limite de compra de bilhetes</label>
                <input class="form-control" name="data_limite_bilhetes" type="datetime-local" id="data_limite_bilhetes" required>
            </div>

            <div class="form-group col-md-6">
                <label for="image">Preço bilhete</label>
                <input class="form-control" name="preco_bilhete" type="number" step="0.01" required>
            </div>

            <div class="form-group col-md-6">
                <label for="image">Preço bilhete sócio</label>
                <input class="form-control" name="preco_bilhete_socio" type="number" step="0.01" required>
            </div>

            <div class="form-group col-md-6">
                <label for="image">Quantidade de bilhetes disponiveis</label>
                <input class="form-control" name="bilhetes_disponiveis" type="number" required>
            </div>


            <div class="form-group col-md-6">
                <label for="local">Local</label>
                <input type="text" class="form-control" name="local" id="local" placeholder="Enter Title"
                       required>
            </div>


            <div class="form-group col-md-6">
                <label for="data_jogo">Data do jogo</label>
                <input class="form-control" name="data_jogo" type="datetime-local" id="data_jogo" required>
            </div>


            <div class="form-group col-md-6">
                <label>Equipa adverária</label>
                <div class="form-group">
                    <select required name="equipa">
                        <option value="">Selecione...</option>
                        @foreach ($teams as $team)
                            <option value="{{ $team->id }}">{{ $team->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Inserir</button>
        </div>


    </form>
@endsection
