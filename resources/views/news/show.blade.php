@extends('layouts.main')
@section('content')
    <div class="row g-5">
        <div class="col-md-8">
            <article class="blog-post">
                <h2 class="blog-post-title">{{$news['title']}}</h2>
                <p class="blog-post-meta">{{$news['create_at']}}</p>
                <p>{{ $news['description'] }}</p>

            </article>
        </div>
        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="fst-italic">О нас</h4>
                    <p class="mb-0">Настройте этот раздел, чтобы рассказать вашим посетителям немного о вашей публикации, авторах, контенте или о чем-то еще. Все зависит от вас.</p>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Архивы</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">Март 2021</a></li>
                        <li><a href="#">Февраль 2021</a></li>
                        <li><a href="#">Январь 2021</a></li>
                        <li><a href="#">Декабрь 2020</a></li>
                        <li><a href="#">Ноябрь 2020</a></li>
                        <li><a href="#">Октябрь 2020</a></li>
                        <li><a href="#">Сентябрь 2020</a></li>
                        <li><a href="#">Август 2020</a></li>
                        <li><a href="#">Июль 2020</a></li>
                        <li><a href="#">Июнь 2020</a></li>
                        <li><a href="#">Май 2020</a></li>
                        <li><a href="#">Апрель 2020</a></li>
                    </ol>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">В другом месте</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </div>
        </div></div>
@endsection
