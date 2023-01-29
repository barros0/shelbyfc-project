@extends('layouts.master')

@section('title','Quem Somos | ShelbyFC')

@include('partials.head')

@section('content')

<div class="conteudo-sobre">
    <div class="imagem-inicio">

        <div class="parte-baixo-banner">
            <div class="texto-banner">ACERCA DO SHELBY FC</div>
            <p>Encontre aqui mais informações sobre o nosso clube</p>
        </div>
    </div>

    <div class="about-section">
        <div class="about-text">
            <div class="texto-banner"><span>|</span> MAIS ACERCA DO SHELBY FC <span>|</span></div>
            <p>O Shelby Football Club consiste num clube desportivo amador local que visa promover o desporto rei tendo
                um maior foco em jovens desfavorecidos cuja vida é praticamente passada em instituições (7-18 anos).</p>

        </div>

    </div>

    <div class="what-section">

        <div class="texto-banner"><span>|</span> DESCOBRE MAIS DO QUE FAZEMOS <span>|</span></div>

        <div class="ret-section">

        <div class="row-what">
                <div class="ret-what">
                    <i class='bx bx-football'></i>
                    <span class="texto-caixa-sobre">7x Campeão Nacional <br> 2x Taça de Portugal</span>
                </div>
                <div class="ret-what">
                    <i class='bx bx-buildings'></i>
                    <span class="texto-caixa-sobre">2 567 321€ angariados <br> 4.500 Alunos</span>
                </div>
                <div class="ret-what">
                    <i class='bx bx-user'></i>
                    <span class="texto-caixa-sobre">2340 Sócios</span>
                </div>
            </div>

        </div>
    </div>


    <div class="team-section">
        <div class="texto-banner"><span>|</span> A NOSSA EQUIPA <span>|</span></div>

        <div class="ret-section">

            <div class="ret">
                <div id="ret1"></div>
                <div id="ret-info">
                    <div class="up-side">
                        <p>João Duarte</p>
                    </div>
                    <div class="down-side"><a href="https://bartz89.github.io/CurriculumVittae/"><i
                                class='bx bx-link'></i></a><a href="https://github.com/bartz89?tab=repositories"><i
                                class='bx bxl-github'></i></a><a
                            href="https://www.linkedin.com/in/jo%C3%A3o-duarte-9289811ab/"><i
                                class='bx bxl-linkedin-square'></i></a></div>
                </div>
            </div>
            <div class="ret">
                <div id="ret2"></div>
                <div id="ret-info">
                    <div class="up-side">
                        <p>João Barros</p>
                    </div>
                    <div class="down-side"><a href="https://barros0.github.io/portfolio-site/"><i
                                class='bx bx-link'></i></a><a href="https://github.com/barros0"><i
                                class='bx bxl-github'></i></a><a
                            href="https://www.linkedin.com/in/jo%C3%A3o-barros-655721162/"><i
                                class='bx bxl-linkedin-square'></i></a></div>
                </div>
            </div>
            <div class="ret">
                <div id="ret3"></div>
                <div id="ret-info">
                    <div class="up-side">
                        <p>André Sousa</p>
                    </div>
                    <div class="down-side"><a href="https://www.andresousadev.com/"><i class='bx bx-link'></i></a><a
                            href="https://github.com/Assado3000"><i class='bx bxl-github'></i></a><a
                            href="https://www.linkedin.com/in/andr%C3%A9-sousa-171b201b1/"><i
                                class='bx bxl-linkedin-square'></i></a></div>
                </div>
            </div>
            <div class="ret">
                <div id="ret4"></div>
                <div id="ret-info">
                    <div class="up-side">
                        <p>Micael Pereira</p>
                    </div>
                    <div class="down-side"><a href="https://github.com/bartz89?tab=repositories"><i
                                class='bx bx-link'></i></a><a href="https://github.com/bartz89?tab=repositories"><i
                                class='bx bxl-github'></i></a><a href="https://github.com/bartz89?tab=repositories"><i
                                class='bx bxl-linkedin-square'></i></a></div>
                </div>
            </div>

        </div>

    </div>


</div>

@endsection