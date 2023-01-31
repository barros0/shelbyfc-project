@extends('layouts.admin.master')


@section('title', 'FaQs | Shelby FC')

@section('content')


    <h1>FaQs</h1>
    <div class="form-menu d-flex justify-content-between">
        <div class="form-search">
            <input type="text" name="" class="form-control" placeholder="Search">
        </div>
        <a href="{{ route('admin.faqs.create') }}" class="btn">Adicionar</a>
    </div>

    <div class="table-responsive">
    <table  class="datatable">
      <thead>
            <tr class="header">
                <th>ID</th>
                <th>Pergunta</th>
                <th>Categoria</th>
                <th>Actions</th>
            </tr>
      </thead> <tbody>
            @foreach ($faqs as $faq)
                <tr>
                    <td>{{ $faq->id }}</td>
                    <td>{{ $faq->pergunta }}</td>
                    <td>{{ $faq->categoria }}</td>
                    <td>
                        <a href="{{ route('admin.faqs.edit', $faq) }}" class="btn"><i class='bx bx-edit-alt'></i></a>
                        <form action="{{ route('admin.faqs.destroy', $faq) }}" method="post">
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
