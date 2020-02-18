@extends('layouts.bootstrapLayout')

@section('menu')
    @include('menu.main')
@endsection

@section('content')
    <section class="categories">
        <div class="container categories__container">
            <h1>Категории</h1>
            <div>
                @foreach($categories as $category)
                    <a href="{{ route('categories.category', $category['id']) }}" class="link category__link">{{ $category['name'] }}</a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
