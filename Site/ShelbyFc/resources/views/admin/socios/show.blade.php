@extends('layouts.admin.master')

@section('title', 'Subscrição | Shelby FC')

@section('content')

    <a style="font-size:25px;" href="{{ route('admin.socios.index') }}"><i class='bx bx-left-arrow-alt'></i></a>
    <h1>Subscrição de {{$subscription->email}}</h1>

    <div class="container my-4">

        <div class="row">

            <form action="#" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" value="{{ $subscription->name }}"
                               required>
                    </div>
        
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="{{ $subscription->email }}"
                               required>
                    </div>
        
        
                    <div class="form-group col-md-6">
                        <label for="name">Email</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ $subscription->email }}"
                               required>
                    </div>
        
                    <div class="col-lg-3">
                        <h3>Estado</h3>
                        <div class="form-group">
                            <select name="categorie_id">
                                <option value="1">Pendente</option>
                                <option value="2">Ativo</option>
                                <option value="3">Suspenso</option>
                                <option value="4">Banido</option>
                            </select>
                        </div>
                    </div>
        
        
                    <button type="submit" class="btn btn-primary">Inserir</button>
                </div>
            </form>
        </div>
    </div>
@endsection
