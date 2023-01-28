@extends('layouts.admin.master')


@section('title', 'Jogos | Shelby FC')

@section('content')


    <h1>Jogos</h1>

    <div class="form-menu d-flex justify-content-between">
        <div class="form-search">
            <input type="text" name="" class="form-control" placeholder="Search">
        </div>
        <a href="{{ route('admin.games.create') }}" class="btn">Adicionar</a>
    </div>
    <table>
        <tbody>
            <tr class="header">
                <th>ID</th>
                <th>Adversário</th>
                <th>Preço</th>
                <th>Preço sócio</th>
                <th>Local</th>
                <th>Bilhetes disponiveis</th>
                <th>Data</th>
                <th>Publicado</th>
                <th>Actions</th>
                <th>Resultados</th>
            </tr>
            @foreach ($games as $game)
                <tr>
                    <td>{{ $game->id }}</td>
                    <td>{{ $game->opponent->name }}</td>
                    <td>{{ $game->ticket_price }}€</td>
                    <td>{{ $game->ticket_price_partner }}€</td>
                    <td>{{ $game->location }}</td>
                    <td>{{ $game->stock_tickets}}</td>
                    <td>{{ $game->datetime_game }}</td>
                    <td>{{ $game->created_at }}</td>
                    <td>
                        <a href="{{ route('admin.games.edit', $game) }}" class="btn"><i class='bx bx-edit-alt'></i></a>
                        <form action="{{ route('admin.games.destroy', $game) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit"><i class='bx bx-trash'></i></button>
                        </form>
                    </td>
                    <td>
                        @if(!$game->result_home || !$game->result_opponent)
                        <a href="{{route('admin.games.show', $game) }}" class="btn">Publicar Resultado</a>
                        @else
                        <a href="{{route('admin.games.show', $game) }}" class="btn">Ver Resultado</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



@endsection
