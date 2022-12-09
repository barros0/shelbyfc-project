@include('partials.head')


<header>
    <div class="navbar-esq">
        <div class="logo">
            <a class="link-logo" href="{{route('index')}}">
                <img src="{{asset('images/logo.svg')}}" alt="Logo">
            </a>
        </div>
    </div>

    <div class="navbar-dir">

        <a href="{{route('register')}}" id="conta">CRIAR CONTA</a>

    </div>
</header>

<div id="seccao-login" class="d-flex justify-content-center align-items-center fullvh">
    <section id="login" class="col-12">
        <div class="row text-center col-12 title-login">
            <h3 class="tit">Bem-Vindo de Volta!</h3>
        </div>
        <div class="login-wrapper">
            <div class="login-regular">
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <label for="email">EMAIL</label>
                    <input value="{{ old('email') }}" class="@error('email') is-invalid @enderror" type="email" id="email" name="email" placeholder="nome@exemplo.com" required autocomplete="email" autofocus onkeyup="enableSubmit()">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <label for="password">PASSWORD </label>

                    <div class="pass-container">
                        <input @error('password') is-invalid @enderror type="password" name="password" id="password" placeholder="Password" required autocomplete="current-password" class="required" onkeyup="enableSubmit()">
                        <i class="fas fa-eye" id="eye" onclick="showPass()"></i>
                        <a href="#" class="frgt">Esqueceu-se da Password?</a>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror


                    <input type="submit" id="login-btn" class="btn-login" value="INICIAR SESSÃO" disabled="disabled">
                </form>
            </div>
            <div class="vl">
                <span class="vl-innertext">OU</span>
            </div>
            <div class="login-socials">

                <a href="{{ route('social.redirect','google') }}" class="social">
                    <div class="logo-social"><img src="{{asset('images/icons/google.svg')}}" alt="Google"></div>
                    <div class="nome-social">Continuar com o Google</div>
                </a>

                <a href="{{ route('social.redirect','facebook') }}" class="social">
                    <div class="logo-social"><img src="{{asset('images/icons/apple.svg')}}" alt="Apple"></div>
                    <div class="nome-social">Continuar com a Apple</div>
                </a>

                <a href="{{ route('social.redirect','facebook') }}" class="social">
                    <div class="logo-social"><img src="{{asset('images/icons/facebook.svg')}}" alt="Facebook"></div>
                    <div class="nome-social">Continuar com o Facebook</div>
                </a>
            </div>

        </div>
        <div class="row text-center col-12 title-login">
            <a href="#" class="trouble">NÃO CONSEGUE INICIAR SESSÃO?</a>
            <div class="linha-ajuda"></div>
        </div>
        <div class="row footer-bg col-12 title-login"></div>

    </section>
</div>

<div class="background">
    <div class="dir"></div>
    <div class="left"></div>
</div>


<script src="{{asset('js/login.js')}}"></script>
