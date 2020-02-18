@extends('layouts.bootstrapLayout')

@section('menu')
    @include('menu.admin')
@endsection

@section('content')
    <section class="add-news">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Добавить новость</div>
                        <div class="card-body">
                            <form name="my-form">
                                <div class="form-group row">
                                    <label for="news_heading" class="col-md-4 col-form-label text-md-right">
                                        Заголовок </label>
                                    <div class="col-md-6">
                                        <input type="text" id="news_heading" class="form-control" name="firs-name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="news_body" class="col-md-4 col-form-label text-md-right">Текст</label>
                                    <div class="col-md-6">
                                        <textarea class="form-control rounded-0" name="news-body" id="news_body" cols="30" rows="10"></textarea>
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
