@extends('layouts.bootstrapLayout')

@section('menu')
    @include('menu.admin')
@endsection

@section('content')

    <section class="add-news">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">Добавить новость</div>
                        <div class="card-body">
                            <form enctype="multipart/form-data"
                                  action="{{ $news->id ? route('admin.news.update', $news): route('admin.news.store') }}"
                                  method="post">
                                @csrf
                                @if(request()->routeIs('admin.news.edit'))
                                    @method('PATCH')
                                @else
                                    @method('POST')
                                @endif
                                <div class="form-group row">
                                    <label for="news_title" class="col-md-4 col-form-label text-md-right">
                                        Заголовок </label>
                                    <div class="col-md-6">
                                        @if($errors->has('title'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                @foreach($errors->get('title') as $error)
                                                    {{ $error }}
                                                @endforeach
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                        <input
                                            type="text"
                                            id="news_title"
                                            class="form-control"
                                            name="title"
                                            value="{{ old('title') ?? $news->title ?? '' }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="newsCategory" class="col-md-4 col-form-label text-md-right">
                                        Категория
                                    </label>
                                    <div class="col-md-6">
                                        @if($errors->has('category_id'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                @foreach($errors->get('category_id') as $error)
                                                    {{ $error }}
                                                @endforeach
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                        <select name="category_id" id="newsCategory" class="form-control">
                                            @foreach($categories as $category)
                                                <option
                                                    value="{{ $category->id }}"
                                                    @if($news->category_id == $category->id ?: old('category_id') == $category->id) selected @endif
                                                >{{ $category->name }}</option>
                                            @endforeach
                                            <option value="12345">wrong option</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="news_body" class="col-md-4 col-form-label text-md-right">Текст</label>
                                    <div class="col-md-6">
                                        @if($errors->has('body'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                @foreach($errors->get('body') as $error)
                                                    {{ $error }}
                                                @endforeach
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                        <textarea class="form-control rounded-0" name="body" id="news_body"
                                                  cols="30" rows="10">{{ old('body') ?? $news->body ?? '' }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="isPrivate" class="col-md-4 col-form-label text-md-right">
                                        Сделать новость приватной
                                    </label>
                                    <div class="col-md-6">
                                        <input type="checkbox"
                                               name="isPrivate"
                                               id="isPrivate"
                                               value="1"
                                               class="form-check mt-3"
                                               @if($news->isPrivate ?? old('isPrivate')) checked @endif
                                        >
                                    </div>
                                </div>
                                <div class="form-group row">

                                    <label for="newsImage" class="col-md-4 col-form-label text-md-right">
                                        Картинка
                                    </label>
                                    <div class="col-md-6">
                                        @if($errors->has('image'))
                                            <div class="alert alert-danger alert-dismissible fade show"
                                                 role="alert">
                                                @foreach($errors->get('image') as $error)
                                                    {{ $error }}
                                                @endforeach
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                        <input type="file" name="image">
                                    </div>
                                    <div class="row justify-content-center add-news__img-handler">
                                        <div class="col-md-6">
                                            @if($news->image)
                                                <img class="add-news__img" src="{{ $news->image}}" alt="news__image">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @if($news->image)
                                    <div class="form-group row">
                                        <label for="deleteImage" class="col-md-4 col-form-label text-md-right">
                                            Удалить картинку
                                        </label>
                                        <div class="col-md-6">
                                            <input type="checkbox"
                                                   name="deleteImage"
                                                   id="deleteImage"
                                                   value="1"
                                                   class="form-check mt-3"
                                            >
                                        </div>
                                    </div>
                                @endif
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ $news->id ? 'Изменить' : 'Добавить' }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
