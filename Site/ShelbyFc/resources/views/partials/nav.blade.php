<nav id="navbar" class="d-flex">
    <div class="navbar-logo-container d-flex justify-content-center">
        <a class="" href="{{ route('index') }}">
            <img src="{{ asset('images/logo.svg') }}" alt="Logo">
        </a>
        <i onclick="openNav()" id="menu_hamburguer"class='bx bx-menu'></i>
    </div>
    <div class="navbar-menu-container">
        <div class="navbar-info-container d-flex flex-row justify-content-around">
            <div class="d-flex justify-content-around align-items-center">
                <p class="d-flex align-items-center"><i class='bx bxs-phone'></i> 244 144 102</p>
                <div class="line"></div>
                <p class="d-flex align-items-center"><i class='bx bxs-envelope'></i> shelbyfc@gmail.com</p>
            </div>
            <div class="d-flex justify-content-around align-items-center">
                @if (Auth::check())
                    <a href="{{ route('withdraw') }}">{{ Auth::user()->balance }}€</a>

                    <a href="{{ route('perfil') }}">Minha conta</a>

                    @if (Auth::user()->is_admin)
                        <div class="line"></div>
                        <a href="{{ route('admin.dashboard') }}">Administração</a>
                    @endif
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <div class="line"></div>
                    <a href="{{ route('register') }}">Register</a>
                @endif
            </div>
        </div>
        <div class="navbar-navigation-container d-flex">
            <div class="navbar-third-container d-flex align-items-center justify-content-center">
                <ul>
                    <li>
                        <a class="d-flex align-items-center justify-content-center" target="_blank"
                            href="https://teste.social-bubble.pt">
                            Loja Online
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center justify-content-center" href="{{ route('forum.home') }}">
                            Forúm
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center justify-content-center" href="{{ route('noticias') }}">
                            Notícias
                        </a>
                    </li>
                    <li>
                        Jogos
                        <ul>
                            <li>
                                <a class="d-flex align-items-center justify-content-center"
                                    href="{{ route('jogos') }}">
                                    Calendário
                                </a>
                            </li>
                            <li>
                                <a class="d-flex align-items-center justify-content-center"
                                    href="{{ route('resultados') }}">
                                    Resultados
                                </a>
                            </li>
                            <li>
                                <a class="d-flex align-items-center justify-content-center"
                                    href="{{ route('tickets') }}">
                                    Bilheteira
                                </a>
                            </li>
                            <li>
                                <a class="d-flex align-items-center justify-content-center"
                                    href="{{ route('tobet') }}">
                                    Apostar
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        Suporte
                        <ul>
                            <li>
                                <a class="d-flex align-items-center justify-content-center"
                                    href="{{ route('sobre') }}">
                                    Quem Somos
                                </a>
                            </li>
                            <li>
                                <a class="d-flex align-items-center justify-content-center" href="{{ route('faqs') }}">
                                    FAQs
                                </a>
                            </li>
                            <li>
                                <a class="d-flex align-items-center justify-content-center"
                                    href="{{ route('forum.home') }}">
                                    Termos e Condições
                                </a>
                            </li>
                            <li>
                                <a class="d-flex align-items-center justify-content-center"
                                    href="{{ route('contacts') }}">
                                    Contactos
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="d-flex align-items-center justify-content-center" href="{{ route('inscrever') }}">
                            Sócio
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="myNav" class="overlay">
        <div class="d-flex align-items-center">
            @if (Auth::check())
                <a href="{{ route('withdraw') }}">{{ Auth::user()->balance }}€</a>

                <a href="{{ route('perfil') }}">Minha conta</a>

                @if (Auth::user()->is_admin)
                    <div class="line"></div>
                    <a href="{{ route('admin.dashboard') }}">Administração</a>
                @endif
            @else
                <a href="{{ route('login') }}">Login</a>
                <div class="line"></div>
                <a href="{{ route('register') }}">Register</a>
            @endif
        </div>
        <div class="contactos_responsive">
            <p class="d-flex align-items-center"><i class='bx bxs-phone'></i> 244 144 102</p>
            <div class="line"></div>
            <p class="d-flex align-items-center"><i class='bx bxs-envelope'></i> shelbyfc@gmail.com</p>
        </div>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <a href="https://teste.social-bubble.pt">Loja Online</a>
            <a href="{{ route('forum.home') }}">Forum</a>
            <a href="{{ route('noticias') }}">Notícias</a>
            <p>Jogos<i class='bx bxs-down-arrow'></i></p>
            <p>Suporte<i class='bx bxs-down-arrow'></i></p>
            <a href="{{ route('inscrever') }}">Sócio</a>
        </div>
    </div>
</nav>
