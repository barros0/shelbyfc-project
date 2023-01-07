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
            <h3 class="tit">Recuperar password!</h3>
        </div>
        <div class="login-wrapper">
            <div class="login-regular">
                <form class="form-login" method="post" action="{{ route('forget.password.post') }}">
                    @csrf
                    <label for="email">EMAIL</label>
                    <input value="{{ old('email') }}" class="@error('email') is-invalid @enderror" type="email" id="email" name="email" placeholder="nome@exemplo.com" required autocomplete="email" autofocus onkeyup="enableSubmit()">


                    @if($errors->all())
                        @foreach($errors->all() as $error)
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $error }}</strong>
                    </span>
                        @endforeach
                    @endif




                    <input type="submit" id="login-btn" class="btn-login" value="INICIAR SESSÃO" disabled="disabled">
                </form>
            </div>


        </div>
        <div class="row text-center col-12 title-login">
            <a href="{{route('forget.password.get')}}" class="trouble">NÃO CONSEGUE INICIAR SESSÃO?</a>
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
