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
                        <div class="card-header">Изменить данные пользователя</div>
                        <div class="card-body">
                            <form enctype="multipart/form-data"
                                  action="{{ route('admin.users.update', $user->id) }}"
                                  method="post">
                                @csrf
                                @method('patch')
                                <div class="form-group row">
                                    <label for="userName" class="col-md-4 col-form-label text-md-right">
                                        Имя пользователя </label>
                                    <div class="col-md-6">
                                        @if($errors->has('name'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                @foreach($errors->get('name') as $error)
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
                                            id="userName"
                                            class="form-control"
                                            name="name"
                                            value="{{old('name') ?? $user->name }}"
                                        >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="userEmail" class="col-md-4 col-form-label text-md-right">
                                        Email
                                    </label>
                                    <div class="col-md-6">
                                        @if($errors->has('email'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                @foreach($errors->get('email') as $error)
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
                                                id="userEmail"
                                                class="form-control"
                                                name="email"
                                                value="{{old('email') ?? $user->email }}"
                                            >
                                    </div>
                                </div>
{{--                                <div class="form-group row">--}}
{{--                                    <label for="userPassword" class="col-md-4 col-form-label text-md-right">--}}
{{--                                        Пароль--}}
{{--                                    </label>--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        @if($errors->has('password'))--}}
{{--                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">--}}
{{--                                                @foreach($errors->get('password') as $error)--}}
{{--                                                    {{ $error }}--}}
{{--                                                @endforeach--}}
{{--                                                <button type="button" class="close" data-dismiss="alert"--}}
{{--                                                        aria-label="Close">--}}
{{--                                                    <span aria-hidden="true">&times;</span>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                        @endif--}}
{{--                                        <input--}}
{{--                                            type="text"--}}
{{--                                            id="userPassword"--}}
{{--                                            class="form-control"--}}
{{--                                            name="password"--}}
{{--                                        >--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group row">--}}
{{--                                    <label for="userNewPassword" class="col-md-4 col-form-label text-md-right">--}}
{{--                                        Новый пароль--}}
{{--                                    </label>--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        @if($errors->has('email'))--}}
{{--                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">--}}
{{--                                                @foreach($errors->get('email') as $error)--}}
{{--                                                    {{ $error }}--}}
{{--                                                @endforeach--}}
{{--                                                <button type="button" class="close" data-dismiss="alert"--}}
{{--                                                        aria-label="Close">--}}
{{--                                                    <span aria-hidden="true">&times;</span>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                        @endif--}}
{{--                                        <input--}}
{{--                                            type="text"--}}
{{--                                            id="userNewPassword"--}}
{{--                                            class="form-control"--}}
{{--                                            name="email"--}}
{{--                                        >--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="form-group row">
                                    <label for="is_admin" class="col-md-4 col-form-label text-md-right">
                                        Администратор
                                    </label>
                                    <div class="col-md-6">
                                        <div id="token" data-token="{{ csrf_token() }}"></div>
                                        <input type="checkbox"
                                               name="is_admin"
                                               id="is_admin"
                                               value="1"
                                               class="form-check mt-3"
                                               @if($user->is_admin) checked @endif
                                        >
                                    </div>
                                </div>
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Изменить
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
