@extends('layouts.perfil')

@section('content-perfil')

@if(Auth::user()->tickets->count() > 0 )


    <table>
        <tbody>
        <tr class="header">
            <th>#</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Data do jogo</th>
            <th>Data</th>
        </tr>
        @foreach(Auth::user()->tickets as $ticket)
            <tr>
                <td>{{$ticket->id}}</td>
                <td>Shelby FC vs {{$ticket->opponent}}</td>
                <td>{{$ticket->value}}€</td>
                <td>{{$ticket->game->datime_game}}</td>
                <td>{{$ticket->created_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <div class="alert-profile">
        <h4>Você ainda não fez comprou nenhum bilhete.</h4>

        <div class="d-flex justify-content-center">
        <a href="{{'jogos'}}" class="btn-primary btn">Ver próximo jogos</a>
        </div>
    </div>



@endif
@endsection
