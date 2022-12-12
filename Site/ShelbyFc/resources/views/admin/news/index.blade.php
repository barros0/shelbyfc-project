@extends('layouts.admin.master')


@section('title','News | Shelby FC')

@section('content')


    <h1>Noticias</h1>

    <a href="{{route('admin.news.create')}}" class="btn">Nova</a>

    <table>
        <tbody>
        <tr class="header">
            <th>Pacote</th>
            <th>Idade</th>
            <th>Mensalidade</th>
        </tr>
        @foreach ($news as $new) <!--para cada registo de pacote-->
        <tr>
            <td>{{ $new->pack }}</td>
            <td>{{ $new->age }}</td>
            <td>{{ $new->price }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>



@endsection
