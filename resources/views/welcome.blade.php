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
                @for($i = 0; $i < 4; $i++)
                    <div class="news-block col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="news-block__body">
                            <div class="news-block__img-container">
                                <img src="{{ $news['newsImg'] }}" alt="news__img" class="news-block__img">
                            </div>
                            <div class="news-block__heading">
                                <p>{{ $news['heading'] }}</p>
{{--                                <a href="#" class="btn btn-black news-block__btn">Читать</a>--}}
                            </div>
                        </a>
                    </div>
                @endfor



{{--                <div class="news-block col-sm-12 col-md-6 col-lg-4 col-xl-3">--}}
{{--                    <div></div>--}}
{{--                </div>--}}
{{--                <div class="news-block col-sm-12 col-md-6 col-lg-4 col-xl-3">--}}
{{--                    <div></div>--}}
{{--                </div>--}}
{{--                <div class="news-block col-sm-12 col-md-6 col-lg-4 col-xl-3">--}}
{{--                    <div></div>--}}
{{--                </div>--}}
{{--                <div class="news-block col-sm-12 col-md-6 col-lg-4 col-xl-3">--}}
{{--                    <div></div>--}}
{{--                </div>--}}
            </div>
            <a href="/news" class="btn btn-black all-news__btn">Все новости</a>
        </div>
    </section>
@endsection
