@extends('layouts.bootstrapLayout')

@section('menu')
    @include('menu.main')
@endsection

@section('content')
    <section class="news-body">
        <div class="container">
            <h1>{{ $news['heading'] }}</h1>
            <div class="news-body__img m-auto">
                <img src="{{ $news['newsImg'] }}" alt="news__img" class="news-body__img" >
            </div>
            <p class="news-body__text">
                {{ $news['description'] }}
            </p>
        </div>
    </section>
@endsection
