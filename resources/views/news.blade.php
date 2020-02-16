@extends('layouts.main')
@section('content')
    <section class="news">
        <div class="container news__container">
            @if(isset($category))
                <h1>{{ $category }}</h1>
            @else
                <h1>Новости</h1>
            @endif
            <div class="row">
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
        </div>
    </section>
@endsection
