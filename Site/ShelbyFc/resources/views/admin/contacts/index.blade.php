@extends('layouts.admin.master')


@section('title', 'News | Shelby FC')

@section('content')


    <h1>Contactos</h1>


    <table>
        <tbody>
            <tr class="header">
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Data</th>
                <th>Actions</th>
            </tr>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->created_at }}</td>
                    <td>
                        <a href="{{ route('admin.contacts.show', $contact) }}" class="btn">
                            <i class='bx bx-eyee'></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



@endsection
