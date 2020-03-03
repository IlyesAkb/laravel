@extends('layouts.bootstrapLayout')

@section('menu')
    @include('menu.admin')
@endsection

@section('content')
    <section class="news">
        <div class="container">
            @forelse($news as $item)
                <div class="card">
                    <div class="card-body">
                        <h4>{{ $item->title }}</h4>
                        <a href="{{ route('admin.addNews', $item->id) }}"><button type="button" class="btn btn-warning">Изменить</button></a>
                        <a href="{{ route('admin.deleteNews', $item->id) }}"><button type="button" class="btn btn-danger">Удалить</button></a>
                    </div>
                </div>
            @empty
                <h1>Нет новостей</h1>
            @endforelse
        </div>
    </section>
@endsection
