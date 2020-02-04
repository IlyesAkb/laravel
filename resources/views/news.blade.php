@extends('layouts.main')
@section('content')
    <section class="news">
        <div class="container news__container">
            <h1>Новости</h1>
            <div class="row">
                @for($i = 0; $i < 12; $i++)
                    <div class="news-block col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <a href="#" class="news-block__body">
                            <div class="news-block__img-container">
                                <img src="{{ $news['newsImg'] }}" alt="news__img" class="news-block__img">
                            </div>
                            <div class="news-block__heading">
                                <p>{{ $news['heading'] }}</p>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    </section>
@endsection
