@extends('layouts.bootstrapLayout')

@section('menu')
    @include('menu.admin')
@endsection

@section('content')
    <section class="news">
        <div class="container">
            @forelse($news as $item)
                <div class="card" id="news-{{ $item->id }}">
                    <div class="card-body">
                        <h4>{{ $item->title }}</h4>
                        <form action="{{ route('admin.news.destroy', $item) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <a href="{{ route('admin.news.edit', $item) }}">
                                <button type="button" class="btn btn-warning delete-btn">Изменить</button>
                            </a>
                            <input type="submit" class="btn btn-danger" value="Удалить">
                        </form>
                    </div>
                </div>
            @empty
                <h1>Нет новостей</h1>
            @endforelse
        </div>
        <div class="row justify-content-center btn-wrapper">
            {{ $news->links() }}
        </div>
    </section>
@endsection


