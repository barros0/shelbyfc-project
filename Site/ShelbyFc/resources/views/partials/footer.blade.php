<footer class="ct-footer">
    <div class="container">
        <ul class="ct-footer-list text-center-sm">
            <li>
                <a href="https://teste.social-bubble.pt" id="loja_online_footer" class="ct-footer-list-header">Loja
                    Online</a>
            </li>
            <li>
                <h2 class="ct-footer-list-header">Geral</h2>
                <ul>
                    <li>
                        <a href="{{ route('forum.home') }}">Forúm</a>
                    </li>
                    <li>
                        <a href="{{ route('noticias') }}">Notícias</a>
                    </li>
                    <li>
                        <a href="{{ route('inscrever') }}">Sócio</a>
                    </li>
                </ul>
            </li>
            <li>
                <h2 class="ct-footer-list-header">Jogos</h2>
                <ul>
                    <li>
                        <a href="{{ route('jogos') }}">Calendário</a>
                    </li>
                    <li>
                        <a href="{{ route('resultados') }}">Resultados</a>
                    </li>
                    <li>
                        <a href="{{ route('forum.home') }}">Bilheteira</a>
                    </li>
                    <li>
                        <a href="{{ route('tobet') }}">Apostar</a>
                    </li>
                </ul>
            </li>
            <li>
                <h2 class="ct-footer-list-header">Suporte</h2>
                <ul>
                    <li>
                        <a href="{{ route('sobre') }}">Quem Somos</a>
                    </li>
                    <li>
                        <a href="{{ route('faqs') }}">FAQS</a>
                    </li>
                    <li>
                        <a href="{{ route('forum.home') }}">Termos e Condições</a>
                    </li>
                    <li>
                        <a href="{{ route('contacts') }}">Contactos</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="ct-footer-meta text-center-sm">
            <div class="row">
                <div class="col-sm-6 col-md-2">

                </div>
                <div class="col-sm-6 col-md-3">
                    <img alt="logo" src="{{ asset('images/logo.svg') }}">
                </div>
                <div class="col-sm-6 col-md-2 ct-u-paddingTop10">

                </div>
                <div class="col-sm-6 col-md-2 ct-u-paddingTop10">
                    <address>
                        <span>SHELBY FC<br></span><span>Email: </span>support@shelbyfc.com<br> <span>Morada:</span> R. Gen. Norton de Matos Apartado 4133<br>
                        <span>Phone: <a href="tel:244144102">244 144 102</a></span>
                    </address>
                </div>
                <div class="col-sm-6 col-md-3">

                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
