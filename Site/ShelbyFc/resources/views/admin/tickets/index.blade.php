@extends('layouts.admin.master')


@section('title', 'Bilhetes | Shelby FC')

@section('content')


    <h1>Bilhetes</h1>

    <div class="form-menu d-flex justify-content-between">

    </div>

    <div class="table-responsive">

        <table  class="datatable">
          <thead>
            <tr class="header">
                <th>Ticket ID</th>
                <th>User ID</th>
                <th>Email</th>
                <th>Preço</th>
                <th>Data de Compra</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ticket_list as $ticket)
                <tr>
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->user_id }}</td>
                    <td>{{ $ticket->user->email }}</td>
                    <td>{{ $ticket->price }}€</td>
                    <td>{{ $ticket->created_at }}</td>


                </tr>
            @endforeach
            </tbody>
        </table>

    </div>




@endsection
