@extends('layouts.main')

@section('content')
    <section class="categories">
        <div class="container categories__container">
            <h1>Категории</h1>
            <div>
                @foreach($categories as $key => $category)
                    <a href="/categories/{{ $key }}" class="category__link">{{ $category }}</a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
