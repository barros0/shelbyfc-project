@extends('layouts.master')

@section('title','Minha conta | ShelbyFC')


@section('content')


    <section class="container ">

        <div class="vh-100 d-flex justify-content-center">



            <div class="tab-content d-flex justify-content-center flex-wrapx">

                <nav class="nav-conta container-user-settings ">
                    <div class="nav-conta-wrap">
                        <div class="title">
                            <h3>Definições de conta</h3>
                        </div>

                        <ul class="row nav flex-wrap nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <li class="col-6 col-lg-12">
                                <a href="#" class="active" class="active">
                                    <i class="fa fa-user"></i>
                                    Perfil
                                </a>
                            </li>
                            <li class="col-6 col-lg-12">
                                <a href="{{route('subscricoes')}}">
                                    <i class="fa-sharp fa-solid fa-handshake"></i>
                                    Subscrições
                                </a>
                            </li>
                            <li class="col-6 col-lg-12">
                                <a href="{{route('seguranca')}}">
                                    <i class="fa fa-lock"></i>
                                    Segurança
                                </a>
                            </li>
                            <li class="col-6 col-lg-12">
                                <a href="{{route('transacoes')}}">
                                    <i class="fa fa-coins"></i>
                                    Transações
                                </a>
                            </li>
                            <li class="col-6 col-lg-12">
                                <a href="{{route('preferencias')}}">
                                    <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                    Preferências
                                </a>
                            </li>
                            <li class="col-6 col-lg-12">

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
                </nav><a>

                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>

                <div class="tab-content" id="v-pills-tabContent">

                    <div class="fade show active" id="v-pills-perfil" role="tabpanel"
                         aria-labelledby="v-pills-perfil-tab">
                        @yield('content-perfil')
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
