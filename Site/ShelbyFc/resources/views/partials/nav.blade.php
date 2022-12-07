<nav id="navbar" class="d-flex flex-column">
    <div class="navbar-first-container d-flex flex-row justify-content-around align-items-center">
        <div class="container-contacts d-flex flex-row justify-content-center align-items-center">
            <p class="d-flex align-items-center"> <i class='bx bxs-phone'></i> 244 144 102</p>
            <div class="line"></div>
            <p class="d-flex align-items-center"> <i class='bx bxs-envelope'></i> shelbyfc@gmail.com</p>
        </div>
        <div class="container-login d-flex justify-content-around align-items-center">
            <a href="{{route('login')}}">Login</a>
            <div class="line"></div>
            <a href="{{route('register')}}">Register</a>
        </div>
    </div>
    <div class="navbar-second-container d-flex justify-content-center">
    <img src="{{asset('images/logo.svg')}}" width="7%" alt="Logo">
    </div>
    <div class="navbar-third-container">
        <ul class="d-flex flex-row justify-content-center align-items-center">
            <li>
                <a href="">Loja Online</a>
            </li>
            <li>
                <a href="">Forúm</a>
            </li>
            <li>
                <a href="">Notícias</a>
            </li>
            <li>
                <a href="">Jogos</a>
            </li>
            <li>
                <a href="">Suporte</a>
            </li>
        </ul>
    </div>
</nav>