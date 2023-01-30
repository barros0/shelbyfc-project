@extends('layouts.admin.master')


@section('title', 'Contactos | Shelby FC')

@section('content')


    <h1>Contactos</h1>

    <div class="table-responsive">
        <table class="datatable">
            <thead>
            <tr class="header">
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Data</th>
                <th>Eliminar</th>
                <th>Ver</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->created_at }}</td>
                    <td>

                        <form action="{{ route('admin.contacts.show', $contact) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit"><i class='bx bx-trash'></i></button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('admin.contacts.show', $contact) }}"> <i class="fa fa-eye"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>


@endsection
