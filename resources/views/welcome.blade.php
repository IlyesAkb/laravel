@extends('layouts.bootstrapLayout')

@section('menu')
    @include('menu.main')
@endsection

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
            <div class="row">
                @forelse($news as $item)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                 data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                                 alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                                 src="@if($item->image == null) {{ asset('storage/noImage.jpg') }} @else {{ $item->image }} @endif"
                                 data-holder-rendered="true">
                            <div class="card-body">
                                <p class="card-text"> {{ $item->title }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('news.one', $item->id) }}" type="button"
                                           class="btn btn-sm btn-outline-secondary">View</a>
                                        <a href="#" type="button" class="btn btn-sm btn-outline-secondary">Like</a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h1>Нет новостей</h1>
                @endforelse
            </div>
            <a href="{{ route('news.all') }}" class="btn btn-black all-news__btn">Все новости</a>
        </div>
    </section>
@endsection
