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
                <th>Assunto</th>
                <th>Mensagem</th>
                <th>Data</th>
                <th>Actions</th>
            </tr>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>{{ $contact->created_at }}</td>
                    <td>
                        <form action="{{ route('admin.contacts.destroy', $contact) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit"><i class='bx bx-trash'></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



@endsection
