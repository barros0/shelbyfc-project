@extends('layouts.master')

@section('title','Minha conta | ShelbyFC')


@section('content')


    <section class="container ">

        <div class="vh-100 d-flex justify-content-center">



            <div class="tab-content row justify-content-center  ">
                <nav class="nav-conta container-user-settings col-12 col-md-3">
                    <div class="nav-conta-wrap">
                        <div class="title">
                            <h3>Definições de conta</h3>
                        </div>

                        <ul class="row nav flex-wrap nav-pills me-3">
                            <li class="col-6 col-md-12">
                                <a href="{{route('minha.conta')}}" @if(Route::currentRouteName() == 'minha.conta')class="active"@endif>
                                    <i class="fa fa-user"></i>
                                    Perfil
                                </a>
                            </li>
                            <li class="col-6 col-md-12">
                                <a href="{{route('subscricoes')}}" @if(Route::currentRouteName() == 'subscricoes')class="active"@endif>
                                    <i class="fa-sharp fa-solid fa-handshake"></i>
                                    Subscrições
                                </a>
                            </li>
                            <li class="col-6 col-md-12">
                                <a href="{{route('seguranca')}}" @if(Route::currentRouteName() == 'seguranca')class="active"@endif>
                                    <i class="fa fa-lock"></i>
                                    Segurança
                                </a>
                            </li>
                            <li class="col-6 col-md-12">
                                <a href="{{route('transacoes')}}" @if(Route::currentRouteName() == 'transacoes')class="active"@endif>
                                    <i class="fa fa-coins"></i>
                                    Transações
                                </a>
                            </li>
                            <li class="col-6 col-md-12">
                                <a href="{{route('preferencias')}}" @if(Route::currentRouteName() == 'preferencias')class="active"@endif>
                                    <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                    Preferências
                                </a>
                            </li>
                            <li class="col-6 col-md-12">

                                <a class="logoutbt" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" id="v-preferencias-tab" data-bs-toggle="pill"
                                   data-bs-target="#v-preferencias" type="button" role="tab"
                                   aria-controls="v-preferencias" aria-selected="false">
                                    <i class="fa-sharp fa-solid fa-arrow-right-from-bracket"></i>
                                    Terminar Sessão
                                </a>
                            </li>
                        </ul>

                        <div class="logout d-flex justify-content-center align-items-center">

                        </div>
                    </div>
                </nav>

                <div class="tab-content col-12 col-md-7" id="v-pills-tabContent">

                    <div class="fade show active" id="v-pills-perfil" role="tabpanel"
                         aria-labelledby="v-pills-perfil-tab">
                        @yield('content-perfil')
                    </div>

                </div>
            </div>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </section>


@endsection
