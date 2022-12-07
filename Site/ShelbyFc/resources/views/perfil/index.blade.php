@extends('layouts.master')

@section('title','Minha conta | ShelbyFC')


@section('content')


    <section class="col-12 ">

        <div class=" vh-100 d-flex flex-wrap  justify-content-center">



            <div class="tab-content d-flex justify-content-center">

                <nav class="nav-conta container-user-settings ">
                    <div class="nav-conta-wrap">
                        <div class="title">
                            <h3>Definições de conta</h3>
                        </div>

                        <ul class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <li>
                                <a href="#" class="active"
                                   class="active" id="v-pills-perfil-tab" data-bs-toggle="pill"
                                   data-bs-target="#v-pills-perfil" type="button" role="tab" aria-controls="v-pills-perfil"
                                   aria-selected="true"
                                >
                                    <i class="fa fa-user"></i>
                                    Perfil
                                </a>
                            </li>
                            <li>
                                <a href="#" id="v-subscricoes-tab" data-bs-toggle="pill"
                                   data-bs-target="#v-subscricoes" type="button" role="tab"
                                   aria-controls="v-subscricoes" aria-selected="false">
                                    <i class="fa-sharp fa-solid fa-handshake"></i>
                                    Subscrições
                                </a>
                            </li>
                            <li>
                                <a href="#" id="v-seguranca-tab" data-bs-toggle="pill"
                                   data-bs-target="#v-seguranca" type="button" role="tab"
                                   aria-controls="v-seguranca" aria-selected="false">
                                    <i class="fa fa-lock"></i>
                                    Segurança
                                </a>
                            </li>
                            <li>
                                <a href="#" id="v-transacoes-tab" data-bs-toggle="pill"
                                   data-bs-target="#v-transacoes" type="button" role="tab"
                                   aria-controls="v-transacoes" aria-selected="false">
                                    <i class="fa fa-coins"></i>
                                    Transações
                                </a>
                            </li>
                            <li>
                                <a href="#" id="v-preferencias-tab" data-bs-toggle="pill"
                                   data-bs-target="#v-preferencias" type="button" role="tab"
                                   aria-controls="v-preferencias" aria-selected="false">
                                    <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                    Preferências
                                </a>
                            </li>
                        </ul>

                        <div class="logout d-flex justify-content-center align-items-center">
                            <a href="{{route('logout')}}">
                                <i class="fa-sharp fa-solid fa-arrow-right-from-bracket"></i>
                                <p>Sair</p>
                            </a>
                        </div>
                    </div>
                </nav>

                <div class="tab-content" id="v-pills-tabContent">

                    <div class="fade show active" id="v-pills-perfil" role="tabpanel"
                         aria-labelledby="v-pills-perfil-tab">
                        @include('perfil.partials.perfil')
                    </div>


                    {{-- subscricoes --}}
                    <div class="fade" id="v-subscricoes" role="tabpanel" aria-labelledby="v-subscricoes-tab">
                        @include('perfil.partials.subscricoes')
                    </div>

                    {{-- seguranca --}}
                    <div class="fade" id="v-seguranca" role="tabpanel" aria-labelledby="v-seguranca-tab">
                        @include('perfil.partials.seguranca')
                    </div>

                    {{-- transacoes --}}
                    <div class="fade" id="v-transacoes" role="tabpanel" aria-labelledby="v-transacoes-tab">
                        @include('perfil.partials.transacoes')
                    </div>

                    {{-- preferencias --}}
                    <div class="fade" id="v-preferencias" role="tabpanel" aria-labelledby="v-preferencias-tab">
                        @include('perfil.partials.preferencias')
                    </div>


                </div>
            </div>
        </div>
    </section>


@endsection
