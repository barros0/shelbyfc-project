<nav id="navbar" class="d-flex flex-column">
    <div class="navbar-first-container d-flex flex-row justify-content-around align-items-center">
        <div class="container-contacts d-flex flex-row justify-content-center align-items-center">
            <p class="d-flex align-items-center"><i class='bx bxs-phone'></i> 244 144 102</p>
            <div class="line"></div>
            <p class="d-flex align-items-center"><i class='bx bxs-envelope'></i> shelbyfc@gmail.com</p>
        </div>
        <div class="container-login d-flex justify-content-around align-items-center">
            @if(Auth::check())
                <a href="{{route('perfil')}}">Minha conta</a>

                @if(Auth::user()->is_admin)
                    <div class="line"></div>
                    <a href="{{route('admin.dashboard')}}">Administração</a>
                    @endif
            @else
                <a href="{{route('login')}}">Login</a>
                <div class="line"></div>
                <a href="{{route('register')}}">Register</a>
            @endif
        </div>
    </div>
    <div class="navbar-second-container d-flex justify-content-around align-items-center">
        <div class="patrocionadores d-flex align-items-center justify-content-center">
            <img src="{{asset('images/icons/hp-preto.png')}}" alt="hp_logo">
            <img src="{{asset('images/icons/nike.svg')}}" alt="nike_logo">
        </div>
        <a class="link-logo" href="{{route('index')}}">
            <img src="{{asset('images/logo.svg')}}" width="7%" alt="Logo">
        </a>
        <div class="patrocionadores d-flex align-items-center justify-content-center">
            <img src="{{asset('images/icons/amazon.svg')}}" alt="amazon_logo">
            <img src="{{asset('images/icons/jordao.svg')}}" alt="jordan_logo">
        </div>
    </div>
    <div class="navbar-third-container d-flex align-items-center justify-content-center">
        <ul>
            <li>
                <a class="d-flex align-items-center justify-content-center" target="_blank"
                   href="https://teste.social-bubble.pt">
                    Loja Online
                </a>
            </li>
            <li>
                <a class="d-flex align-items-center justify-content-center" href="{{route('forum.home')}}">
                    Forúm
                </a>
            </li>
            <li>
                <a class="d-flex align-items-center justify-content-center" href="{{route('noticias')}}">
                    Notícias
                </a>
            </li>
            <li>
                Jogos
                <ul>
                    <li>
                        <a class="d-flex align-items-center justify-content-center" href="{{route('forum.home')}}">
                            Calendário
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center justify-content-center" href="{{route('forum.home')}}">
                            Bilheteira
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center justify-content-center" href="{{route('forum.home')}}">
                            Apostas
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                Suporte
                <ul>
                    <li>
                        <a class="d-flex align-items-center justify-content-center" href="{{route('forum.home')}}">
                            Quem Somos
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center justify-content-center" href="{{route('faqs')}}">
                            FAQs
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center justify-content-center" href="{{route('forum.home')}}">
                            Termos e Condições
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center justify-content-center" href="{{route('forum.home')}}">
                            Contactos
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
