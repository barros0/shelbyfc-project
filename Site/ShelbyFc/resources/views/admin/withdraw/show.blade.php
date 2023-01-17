@extends('layouts.admin.master')


@section('title', 'Tranferência de '.$withdraw->user->name .' | Shelby FC')

@section('content')

    <h1>Tranferência para {{$withdraw->user->name}} </h1>


        <div class="row">
            <div class="form-group col-md-6">
                <label for="nome">Nome</label>
                <input disabled type="text" class="form-control" value="{{ $withdraw->user->name }}">
            </div>

            <div class="form-group col-md-6">
                <label for="email">IBAN</label>
                <input disabled type="text" class="form-control" value="{{ $withdraw->iban }}">
            </div>

            <div class="form-group col-md-6">
                <label for="email">Data</label>
                <input disabled type="text" class="form-control" value="{{ $withdraw->created_at }}">
            </div>


            <div class="form-group col-md-6">
                <label for="email">Valor</label>
                <input disabled type="text" class="form-control" value="{{ $withdraw->value }}">
            </div>

            @if($withdraw->complete)
                <div class="form-group col-md-6">
                    <label for="email">Concluido a:</label>
                    <input disabled type="text" class="form-control" name="email" id="email" value="{{$withdraw->updated_at}}">

                </div>
                <div class="form-group col-md-6">
                    <button type="submit" class="btn-success">Concluida</button>
                </div>
            @endif

            @if(empty($withdraw->complete))
            <form class="col-12" action="{{ route('admin.withdraw.update', $withdraw->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
            <button type="submit" class=" btn-success">Concluir</button>
            </form>
            @endif
        </div>



@endsection
