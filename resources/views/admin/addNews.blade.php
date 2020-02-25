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
                            <form enctype="multipart/form-data" action="{{ route('admin.saveNews')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="news_heading" class="col-md-4 col-form-label text-md-right">
                                        Заголовок </label>
                                    <div class="col-md-6">
                                        <input type="text" id="news_heading" class="form-control" name="title" value="{{ old('title') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="newsCategory" class="col-md-4 col-form-label text-md-right">
                                        Категория
                                    </label>
                                    <div class="col-md-6">
                                        <select name="category_id" id="newsCategory" class="form-control">
                                            @foreach($categories as $category)
                                                <option
                                                    value="{{ $category->id }}"
                                                    @if(old('category') == $category->id) selected @endif
                                                >{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="news_body" class="col-md-4 col-form-label text-md-right">Текст</label>
                                    <div class="col-md-6">
                                        <textarea class="form-control rounded-0" name="body" id="news_body"
                                                  cols="30" rows="10">{{ old('description') }}</textarea>
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
                                               @if(old('isPrivate')) checked @endif
                                        >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="newsImage" class="col-md-4 col-form-label text-md-right">
                                        Картинка
                                    </label>
                                    <div class="col-md-6">
                                        <input type="file" name="image">
                                    </div>
                                </div>
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Добавить
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
