@extends('layouts.main')

@section('content')
    <section class="welcome">
        <div class="container welcome__container">
            <h1 class="welcome__h1">ДОБРО ПОЖАЛОВАТЬ НА САЙТ С НОВОСТЯМИ</h1>
            <p class="welcome__p">Сдесь вы можете ознакомиться с последними событиями</p>
        </div>
    </section>
    <section class="last-news">
        <div class="container last-news__container">
            <h1 class="last-news__heading">Последние новости</h1>
            <div class="news-container row">
                @foreach($news as $key => $body)
                    <div class="news-block col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <a href="/news/{{ $key }}" class="news-block__body">
                            <div class="news-block__img-container">
                                <img src="{{ $body['newsImg'] }}" alt="news__img" class="news-block__img">
                            </div>
                            <div class="news-block__heading">
                                <p>{{ $body['heading'] }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <a href="/news" class="btn btn-black all-news__btn">Все новости</a>
        </div>
    </section>
@endsection
