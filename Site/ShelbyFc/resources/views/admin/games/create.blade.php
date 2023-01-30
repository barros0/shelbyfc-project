@extends('layouts.admin.master')

@section('title', 'Novo jogo | Shelby FC')

@section('content')

    <a style="font-size:25px;" href="{{ route('admin.games.index') }}"><i class='bx bx-left-arrow-alt'></i></a>
    <h1>Novo jogo</h1>

    <form action="{{ route('admin.games.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div class="form-group col-md-6">
                <label for="">Stock bilhetes</label>
                <input class="form-control" name="stock_bilhetes" type="number" required value="{{old('stock_bilhetes')}}">
            </div>

            <div class="form-group col-md-6">
                <label for="data_jogo">Data limite de compra de bilhetes</label>
                <input class="form-control" name="data_limite_bilhetes" type="datetime-local" id="data_limite_bilhetes" required value="{{old('data_limite_bilhetes')}}">
            </div>

            <div class="form-group col-md-6">
                <label for="image">Preço bilhete</label>
                <input class="form-control" name="preco_bilhete" type="number" step="0.01" required value="{{old('preco_bilhete')}}">
            </div>

            <div class="form-group col-md-6">
                <label for="image">Preço bilhete sócio</label>
                <input class="form-control" name="preco_bilhete_socio" type="number" step="0.01" required value="{{old('preco_bilhete_socio')}}">
            </div>

            <div class="form-group col-md-6">
                <label for="local">Local</label>
                <input type="text" class="form-control" name="local" id="local" placeholder="Enter Title"
                       required value="{{old('local')}}">
            </div>

            <div class="form-group col-md-6">
                <label for="data_jogo">Data do jogo</label>
                <input class="form-control" name="data_jogo" type="datetime-local" id="data_jogo" required value="{{old('data_jogo')}}">
            </div>

            <div class="form-group col-md-6">
                <label>Equipa adverária</label>
                <div class="form-group">
                    <select required name="equipa" >
                        <option value="">Selecione...</option>
                        @foreach ($teams as $team)
                            <option
                                @if(old('equipa') == $team->id)
                                selected
                                @endif
                                value="{{ $team->id }}">{{ $team->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Inserir</button>
        </div>

    </form>
@endsection
