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
            <th>Imprimir</th>
        </tr>
        @foreach(Auth::user()->tickets as $ticket)
            <tr>
                <td>{{$ticket->id}}</td>
                <td>Shelby FC vs {{$ticket->game->opponent->name}}</td>
                <td>{{$ticket->price}}€</td>
                <td>{{$ticket->game->datetime_game}}</td>
                <td>{{$ticket->created_at}}</td>
                <td>
                    <a target="_blank" href="{{route('print.ticket',$ticket)}}">
                        <i class="fa fa-print"></i>
                    </a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <div class="alert-profile">
        <h4>Você ainda não fez comprou nenhum bilhete.</h4>

        <div class="d-flex justify-content-center">
        <a href="{{route('jogos')}}" class="btn-primary btn">Ver próximo jogos</a>
        </div>
    </div>



@endif
@endsection
