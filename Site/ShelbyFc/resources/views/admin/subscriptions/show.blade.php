@extends('layouts.admin.master')

@section('title', 'Subscrição | Shelby FC')

@section('content')

    <a style="font-size:25px;" href="{{ route('admin.subscriptions.index') }}"><i class='bx bx-left-arrow-alt'></i></a>
    <h1>Subscrição ID#{{$subscription->id}}</h1>

    <div class="container my-4">

        <div class="row">

            <form action="#" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <h3>Dados Pessoais</h3>
                        <label for="nome">Nome: </label> <span>{{ $subscription->name }}</span>
                        <br>
                        <label for="nome">Email: </label> <span>{{ $subscription->email }}</span>
                        <br>
                        <label for="nome">NIF: </label> <span>{{ $subscription->nif }}</span>
                        <br>
                        <label for="nome">Telemóvel: </label> <span>{{ $subscription->phone }}</span>
                    </div>

                    <div class="form-group col-md-6">
                        <h3>Dados de Faturação</h3>

                        <label for="nome">Código Postal: </label> <span>{{ $subscription->postal_code }}</span>
                        <br>
                        <label for="nome">Morada: </label> <span>{{ $subscription->address }}</span>
                        <br>
                        <label for="nome">Cidade: </label> <span>{{ $subscription->city }}</span>
                    </div>

                    <div class="form-group col-md-6">
                        <h3>Dados de Verificação</h3>
                        <label for="nome">Aniversário: </label> <span>{{ $subscription->birthdate }}</span>
                        <br>
                        <label for="nome">Cartão de Cidadão: </label> <span><a href="/users/cc/{{ $subscription->cc }}" target="_blank">Ver Documento</a></span>
                    </div>
                
                    <div class="form-group col-md-6">
                        <h3>Dados da Subscrição</h3>

                        <label for="nome">Início Subscrição: </label> <span>{{ $subscription->created_at }}</span>
                        <br>
                        <label for="nome">Fim Subscrição: </label> <span>{{ $subscription->expires_at }}</span>
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
