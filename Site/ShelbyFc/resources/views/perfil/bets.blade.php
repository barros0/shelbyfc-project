@extends('layouts.perfil')

@section('content-perfil')

    <h2>Minhas apostas</h2>


    @if(Auth::user()->bets->count() > 0)
    <table>
        <tbody>
        <tr class="header">
            <th>#</th>
            <th>Jogo</th>
            <th>Valor</th>
            <th>Fator</th>
            <th>Data</th>
            <th>Data do jogo</th>
            <th>Resultado</th>
        </tr>
        @foreach(Auth::user()->bets as $bet)
            <tr>
                <td>{{$bet->id}}</td>
                <td>Shelby vs {{$bet->game->opponent->name}}</td>
                <td>{{$bet->value}}€</td>
                <td>{{$bet->fator}}</td>
                <td>{{$bet->created_at}}</td>
                <td>{{$bet->game->datetime_game}}</td>
                <td>
                    @if($bet->game->result)
                        {{$bet->game->result}}
                    @else
                        A aguardar resultado
                    @endif
                    </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <div class="alert-profile">
            <h4>Você ainda não fez nenhuma aposta.</h4>

            <div class="d-flex justify-content-center">
                <a href="{{route('tobet')}}" class="btn-primary btn">Ver jogos e apostar</a>
            </div>
        </div>
    @endif
@endsection
