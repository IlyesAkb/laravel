@extends('layouts.bootstrapLayout')

@section('menu')
    @include('menu.main')
@endsection

@section('content')
    <section class="news-body">
        <div class="container">
            <h1>{{ $news->title }}</h1>
            <div class="news-body__img m-auto">
                <img src="@if($news->image == null) {{ asset('storage/noImage.jpg') }} @else {{ $news->image }} @endif" alt="news__img" class="news-body__img" >
            </div>
            <p class="news-body__text">
                {{ $news->body }}
            </p>
        </div>
    </section>
@endsection
