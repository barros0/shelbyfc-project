@extends('layouts.admin.master')


@section('title', 'Novo jogo | Shelby FC')

@section('content')

    <a style="font-size:25px;" href="{{ route('admin.games.index') }}"><i class='bx bx-left-arrow-alt'></i></a>
    <h1>Publicar resultados</h1>

    <form action="{{ route('admin.games.publish.doresults', $game) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">


            <div class="form-group col-md-6">
                <label for="">Resultado Shelby</label>
                <input class="form-control" name="resultado_shelby" type="number" required>
            </div>

            <div class="form-group col-md-6">
                <label for="apponent">Resultado de {{$game->opponent->name}}</label>
                <input class="form-control" name="resultado_adversario" type="number" id="opponent" required>
            </div>

            <button type="submit" class="btn btn-primary">Publicar</button>
        </div>


    </form>
@endsection
