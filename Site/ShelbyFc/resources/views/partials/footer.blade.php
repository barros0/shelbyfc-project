<footer class="d-flex flex-row justify-content-around">
    <div class="footer-first-container">
        <a class="d-flex justify-content-center" href="{{route('index')}}">
            <img src="{{asset('images/logo.svg')}}" width="30%" alt="Logo">
        </a>
        <div class="patrocionadores">
            <img src="{{asset('images/icons/hp-branco.png')}}" alt="hp_logo">
            <img src="{{asset('images/icons/nike-branco.png')}}" alt="nike_logo">
            <img src="{{asset('images/icons/amazon-branco.svg')}}" alt="amazon_logo">
            <img src="{{asset('images/icons/jordan-branco.png')}}" alt="jordan_logo">
        </div>
    </div>
    <div class="footer-second-container">
        <ul class="d-flex">
            <li><a target="_blank" href="https://teste.social-bubble.pt">Loja Online</a></li>
            <li><a href="{{route('forum.home')}}">Forúm</a></li>
            <li><a href="{{route('noticias')}}">Notícias</a></li>
            <li>
                <ul>
                    <li><a href="{{route('forum.home')}}">Calendário</a></li>
                    <li><a href="{{route('forum.home')}}">Bilheteira</a></li>
                    <li><a href="{{route('forum.home')}}">Apostas</a></li>
                </ul>
            </li>

            <li>
                <ul>
                    <li><a href="{{route('forum.home')}}">Quem Somos</a></li>
                    <li><a href="{{route('forum.home')}}">FAQs</a></li>
                    <li><a href="{{route('forum.home')}}">Termos e Condições</a></li>
                    <li><a href="{{route('forum.home')}}">Contactos</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="footer-third-container">
        <p class="d-flex align-items-center"> <i class='bx bxs-phone'></i> 244 144 102</p>
        <p class="d-flex align-items-center"> <i class='bx bxs-envelope'></i> shelbyfc@gmail.com</p>
        <div class="pagamentos">
            <img src="{{asset('images/icons/paypal.svg')}}" alt="paypal_logo">
        </div>
    </div>
</footer>
<script src="{{ asset('js/functions.js') }}"></script>
</body>

</html>