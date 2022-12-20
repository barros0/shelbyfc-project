<nav id="navbar" class="d-flex">
    <div class="navbar-logo-container d-flex justify-content-center">
        <a class="" href="{{ route('index') }}">
            <img src="{{ asset('images/logo.svg') }}" alt="Logo">
        </a>
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
            <div class="clip-path"></div>
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
                                    href="{{ route('forum.home') }}">
                                    Calendário
                                </a>
                            </li>
                            <li>
                                <a class="d-flex align-items-center justify-content-center"
                                    href="{{ route('forum.home') }}">
                                    Bilheteira
                                </a>
                            </li>
                            <li>
                                <a class="d-flex align-items-center justify-content-center"
                                    href="{{ route('forum.home') }}">
                                    Apostas
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        Suporte
                        <ul>
                            <li>
                                <a class="d-flex align-items-center justify-content-center"
                                    href="{{ route('forum.home') }}">
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
                                    href="{{ route('forum.home') }}">
                                    Contactos
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>