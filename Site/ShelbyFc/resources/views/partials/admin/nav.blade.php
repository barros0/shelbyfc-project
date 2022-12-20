<nav>
    <div class="sidebar-top">
      <span class="shrink-btn">
        <i class='bx bx-chevron-left'></i>
      </span>
        <img src="{{asset('images/logo.svg')}}" class="logo" alt="">
        <h3 class="hide">Shelby FC</h3>
    </div>

    <div class="search" hidden>
        <i class='bx bx-search'></i>
        <input type="text" class="hide" placeholder="Pesquisa ...">
    </div>

    <div class="sidebar-links">
        <ul>
            <li class="active-tab tooltip-element" data-tooltip="0">
                <a href="#" class="active" data-active="0">
                    <div class="icon">
                        <i class='bx bx-tachometer'></i>
                        <i class='bx bxs-tachometer'></i>
                    </div>
                    <span class="link hide">Dashboard</span>
                </a>
            </li>

            <div class="tooltip">
                <span class="show">Dashboard</span>
            </div>
        </ul>


        <h4 class="hide">Noticias</h4>
        <ul>
            <li class="tooltip-element" data-tooltip="0">
                <a href="{{route('admin.news.index')}}" class="active" data-active="0">
                    <div class="icon">
                        <i class='bx bx-news'></i>
                        <i class='bx bxs-news'></i>
                    </div>
                    <span class="link hide">Noticias</span>
                </a>
            </li>

            <li class="tooltip-element" data-tooltip="1">
                <a href="{{route('admin.categories.index')}}" data-active="1">
                    <div class="icon">
                        <i class='bx bx-folder'></i>
                        <i class='bx bxs-folder'></i>
                    </div>
                    <span class="link hide">Categorias</span>
                </a>
            </li>
            <div class="tooltip">
                <span class="show">Noticias</span>
                <span>Categorias</span>
            </div>
        </ul>


        <h4 class="hide">Jogos</h4>
        <ul>
            <li class="tooltip-element" data-tooltip="0">
                <a href="{{route('admin.games.index')}}" class="active" data-active="0">
                    <div class="icon">
                        <i class='bx bx-calendar'></i>
                        <i class='bx bxs-calendar'></i>
                    </div>
                    <span class="link hide">Calendario</span>
                </a>
            </li>

            <li class="tooltip-element" data-tooltip="1">
                <a href="{{route('admin.teams.index')}}" data-active="1">
                    <div class="icon">
                        <i class='bx bx-football'></i>
                        <i class='bx bxs-football'></i>
                    </div>
                    <span class="link hide">Equipas</span>
                </a>
            </li>

            <li class="tooltip-element" data-tooltip="1">
                <a href="" data-active="1">
                    <div class="icon">
                        <i class='bx bx-folder'></i>
                        <i class='bx bxs-folder'></i>
                    </div>
                    <span class="link hide">Bilhetes</span>
                </a>
            </li>

            <li class="tooltip-element" data-tooltip="1">
                <a href="#" data-active="1">
                    <div class="icon">
                        <i class='bx bx-money-withdraw'></i>
                        <i class='bx bxs-money-withdraw'></i>
                    </div>
                    <span class="link hide">Apostas</span>
                </a>
            </li>
            <div class="tooltip">
                <span class="show">Calendario</span>
                <span>Equipas</span>
                <span>Bilhetes</span>
                <span>Apostas</span>
            </div>
        </ul>



        <ul>
            <li class="tooltip-element" data-tooltip="0">
                <a href="{{route('admin.users.index')}}" class="active" data-active="0">
                    <div class="icon">
                        <i class='bx bx-user'></i>
                        <i class='bx bxs-user'></i>
                    </div>
                    <span class="link hide">Utilizadores</span>
                </a>
            </li>

            <div class="tooltip">
                <span class="show">Utilizadores</span>
            </div>
        </ul>


    <div class="sidebar-footer">
        <a href="#" class="account tooltip-element" data-tooltip="0">
            <i class='bx bx-user'></i>
        </a>
        <div class="admin-user tooltip-element" data-tooltip="1">
            <div class="admin-profile hide">
                <img src="{{asset('images/users/'. Auth::user()->image)}}" alt="">
                <div class="admin-info">
                    <h3>{{Auth::user()->name}}</h3>
                    <h5>Admin</h5>
                </div>
            </div>
            <a href="#" class="log-out"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class='bx bx-log-out'></i>
            </a>
        </div>
        <div class="tooltip" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span class="show">{{Auth::user()->name}}</span>
            <span>Logout</span>
        </div>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</nav>





<script>
    const shrink_btn = document.querySelector(".shrink-btn");
    const search = document.querySelector(".search");
    const sidebar_links = document.querySelectorAll(".sidebar-links a");
    const active_tab = document.querySelector(".active-tab");
    const shortcuts = document.querySelector(".sidebar-links h4");
    const tooltip_elements = document.querySelectorAll(".tooltip-element");

    let activeIndex;

    shrink_btn.addEventListener("click", () => {
        document.body.classList.toggle("shrink");
        setTimeout(moveActiveTab, 400);

        shrink_btn.classList.add("hovered");

        setTimeout(() => {
            shrink_btn.classList.remove("hovered");
        }, 500);
    });

    search.addEventListener("click", () => {
        document.body.classList.remove("shrink");
        search.lastElementChild.focus();
    });

    function moveActiveTab() {
        let topPosition = activeIndex * 58 + 2.5;

        if (activeIndex > 3) {
            topPosition += shortcuts.clientHeight;
        }

       // active_tab.style.top = `${topPosition}px`;
    }

    function changeLink() {
        sidebar_links.forEach((sideLink) => sideLink.classList.remove("active"));
        sidebar_links.forEach((sideLink) => sideLink.classList.remove("active-tab"));
        this.classList.add("active");
        this.classList.add("active-tab");

        activeIndex = this.dataset.active;

        moveActiveTab();
    }

    sidebar_links.forEach((link) => link.addEventListener("click", changeLink));

    function showTooltip() {
        let tooltip = this.parentNode.lastElementChild;
        let spans = tooltip.children;
        let tooltipIndex = this.dataset.tooltip;

        Array.from(spans).forEach((sp) => sp.classList.remove("show"));
        spans[tooltipIndex].classList.add("show");

        tooltip.style.top = `${(100 / (spans.length * 2)) * (tooltipIndex * 2 + 1)}%`;
    }

    tooltip_elements.forEach((elem) => {
        elem.addEventListener("mouseover", showTooltip);
    });

</script>

