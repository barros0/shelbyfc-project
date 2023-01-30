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
        <table class="datatable">
            <thead>
            <tr class="header">
                <th>ID</th>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Eliminar</th>
                <th>Ver</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($terms as $term)
                <tr>
                    <td>{!! $term->id !!}</td>
                    <td>{!! $term->titulo !!}</td>
                    <td>{!! $term->categoria !!}</td>
                    <td>
                    <a href="{{ route('admin.terms.edit', $term) }}" class="btn"><i class='bx bx-edit-alt'></i></a>
                        <form action="{{ route('admin.terms.show', $term) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit"><i class='bx bx-trash'></i></button>
                        </form>
                    </td>
                    <td>

                        <a href="{{ route('admin.terms.show', $term) }}"> <i class="fa fa-eye"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>


@endsection
