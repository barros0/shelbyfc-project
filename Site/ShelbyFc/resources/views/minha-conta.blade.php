@extends('layouts.master')

@section('title','ShelbyFC')


@section('content')


<section class="col-12">

    <div class="d-flex">
    <nav class="nav-conta">
        <div class="title">
            <h1>Definições de conta</h1>
        </div>

        <ul>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    Perfil
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    Subscrições
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    Segurança
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    Transações
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    Preferências
                </a>
            </li>
        </ul>

        <div class="logout">
            <i class="fa fa-off"></i> <p>Sair</p>
        </div>

    </nav>

    </div>
</section>



@endsection
