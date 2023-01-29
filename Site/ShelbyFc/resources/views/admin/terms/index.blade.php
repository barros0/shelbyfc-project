@extends('layouts.admin.master')


@section('title', 'Terms & Conditions | Shelby FC')

@section('content')


    <h1>Terms & Conditions</h1>
    <div class="form-menu d-flex justify-content-between">
        <div class="form-search">
            <input type="text" name="" class="form-control" placeholder="Search">
        </div>
        <a href="{{ route('admin.terms.create') }}" class="btn">Adicionar</a>
    </div>

    <div class="table-responsive">
    <table  class="datatable">
        <thead>
            <tr class="header">
                <th>ID</th>
                <th>Titulo</th>
                <th>Texto</th>
                <th>Categoria</th>
                <th>Actions</th>
            </tr></thead>
        <tbody>
            @foreach ($terms as $term)
                <tr>
                    <td>{!! $term->id !!}</td>
                    <td>{!! $term->titulo !!}</td>
                    <td>{!! $term->texto !!}</td>
                    <td>{{ $term->categoria }}</td>
                    <td>
                        <a href="{{ route('admin.terms.edit', $term) }}" class="btn"><i class='bx bx-edit-alt'></i></a>
                        <form action="{{ route('admin.terms.destroy', $term) }}" method="post">
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
