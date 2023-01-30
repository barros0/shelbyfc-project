@extends('layouts.admin.master')


@section('title', 'Bilhetes | Shelby FC')

@section('content')


    <h1>Bilhetes</h1>

    <div class="form-menu d-flex justify-content-between">
        <div class="form-search">
            <input type="text" name="" class="form-control" placeholder="Search">
        </div>
        <a href="{{ route('admin.tickets.create') }}" class="btn">Adicionar</a>
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
                    <td>{{ $ticket->mailUser->email }}€</td>
                    <td>{{ $ticket->price }}€</td>
                    <td>{{ $ticket->created_at }}</td>
                    <td>
                        <a href="{{ route('admin.tickets.edit', $game) }}" class="btn"><i class='bx bx-edit-alt'></i></a>
                        <form action="{{ route('admin.tickets.destroy', $game) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit"><i class='bx bx-trash'></i></button>
                        </form>
                    </td>
     
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>




@endsection
