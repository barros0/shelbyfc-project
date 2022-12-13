@extends("layouts.master")

@section('title','Noticias - Shelby FC')

@section('content')
<div class="container_all_news">
    <div class="container_title">
        <h2>Categoria de Notícias</h2>
    </div>
    <div class="nav_categories">
        <div class="news_from_category">
            <a href="" id="categoria1" class="selected_category">Segunda Liga</a>
            <a href="" id="categoria2">Bilhetes</a>
            <a href="" id="categoria3">Relatório de Jogo</a>
            <a href="" id="categoria4">Pré-Visualização de Jogo</a>
        </div>
    </div>
    <div class="news_category">
        <div class="news_body">
            <img src="img/fod-w.webp" alt="noticia">
            <div class="date_category">
                <p class="news_date">15 Jun 2022</p>
                <p class="newsbody_category">Segunda Liga</p>
            </div>
            <h2>FODEN SHINES AS ENGLAND CRUISE INTO ROUND OF 16</h2>
            <p class="new_small_description">A Phil Foden-inspired England ended Wales' World Cup with a 3-0 victory
                that puts Gareth Southgate«s
                men into the Round of 16.</p>
        </div>
        <div class="news_body">
            <img src="img/nico-oreilly.webp" alt="noticia">
            <div class="date_category">
                <p class="news_date">15 Jun 2022</p>
                <p class="newsbody_category">Segunda Liga</p>
            </div>
            <h2>TRAINING: WOLVES AT THE DOOR FOR OUR UNDER-18S</h2>
            <p class="new_small_description">City's Under-18s were back hard at work on Tuesday as attention
                switches to Saturday's latest Premier League North assignment when we play host to Wolves.</p>
        </div>
        <div class="news_body">
            <img src="img/anti-bullying-week-202230-copy-002.webp" alt="noticia">
            <div class="date_category">
                <p class="news_date">15 Jun 2022</p>
                <p class="newsbody_category">Bilhetes</p>
            </div>
            <h2>CITC TAKE PART IN SUCCESSFUL 'ANTI-BULLYING' WEEK</h2>
            <p class="new_small_description">City in the Community (CITC) marked Anti-Bullying Week last week, with
                five days of activities and social action.
            </p>
        </div>
        <div class="news_body">
            <img src="img/uke4oolq5rdfgjlqvty9.webp" alt="noticia">
            <div class="date_category">
                <p class="news_date">15 Jun 2022</p>
                <p class="newsbody_category">Segunda Liga</p>
            </div>
            <h2>FODEN SHINES AS ENGLAND CRUISE INTO ROUND OF 16</h2>
            <p class="new_small_description">A Phil Foden-inspired England ended Wales' World Cup with a 3-0 victory
                that puts Gareth Southgate«s
                men into the Round of 16.</p>
        </div>
        <div class="news_body">
            <img src="img/ake-v-qatar.webp" alt="noticia">
            <div class="date_category">
                <p class="news_date">15 Jun 2022</p>
                <p class="newsbody_category">Segunda Liga</p>
            </div>
            <h2>FODEN SHINES AS ENGLAND CRUISE INTO ROUND OF 16</h2>
            <p class="new_small_description">A Phil Foden-inspired England ended Wales' World Cup with a 3-0 victory
                that puts Gareth Southgate«s
                men into the Round of 16.</p>
        </div>
        <div class="news_body">
            <img src="img/gqwtqj3dtpbpe6oerjcw.jpg" alt="noticia">
            <div class="date_category">
                <p class="news_date">15 Jun 2022</p>
                <p class="newsbody_category">Segunda Liga</p>
            </div>
            <h2>FODEN SHINES AS ENGLAND CRUISE INTO ROUND OF 16</h2>
            <p class="new_small_description">A Phil Foden-inspired England ended Wales' World Cup with a 3-0 victory
                that puts Gareth Southgate«s
                men into the Round of 16.</p>
        </div>
    </div>
    <div class="container_news_pages">
        <p class="arrows">&#x3c;</p>
        <div class="news_pages">
            <p class="pages" id="page_selected">1</p>
            <p class="pages">2</p>
            <p class="pages">3</p>
            <p class="pages">5</p>
        </div>
        <p class="arrows">&#x3e;</p>
    </div>
</div>
@endsection