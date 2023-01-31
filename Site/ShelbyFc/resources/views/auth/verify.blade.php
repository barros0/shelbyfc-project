@extends('layouts.master')

@section('content')
    <div class="container" style="margin-top: 80px; margin-bottom: 80px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><p class="m-0">
                            <span>
                                <i class="fa fa-envelope"></i>
                            </span>
                             Verifique seu endereço de e-mail</p></div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                <p>Um novo link de verificação foi enviado para o seu endereço de e-mail.</p>
                            </div>
                        @endif

                        <p class="m-0">Antes de prosseguir, verifique seu e-mail para obter um link de verificação</p>
                            <br>
                            <p>Se você não recebeu o e-mail:</p>
                        <div class="row">
                            <form class="d-inline" method="POST" action="{{ route('email.verify.resend') }} {{-- route('verification.resend') --}}">
                                @csrf
                                <button type="submit"
                                        class="btn btn-primary">Clique aqui para pedir outro</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
