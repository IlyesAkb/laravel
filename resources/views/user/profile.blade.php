@extends('layouts.bootstrapLayout')

@section('menu')
    @include('menu.main')
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
                                  action="{{ route('user.profile.update', $user->id) }}"
                                  method="post">
                                @csrf
                                @method('patch')
                                <div class="form-group row">
                                    <label for="userName"
                                           class="col-md-4 col-form-label text-md-right"
                                    >Имя пользователя </label>
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
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">
                                        Текущий пароль
                                    </label>
                                    <div class="col-md-6">
                                        @if($errors->has('password'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                @foreach($errors->get('password') as $error)
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
                                            id="password"
                                            class="form-control"
                                            name="password"
                                        >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="newPassword" class="col-md-4 col-form-label text-md-right">
                                        Новый пароль
                                    </label>
                                    <div class="col-md-6">
                                        @if($errors->has('new_password'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                @foreach($errors->get('new_password') as $error)
                                                    {{ $error }}
                                                @endforeach
                                                <button type="button" class="close"
                                                        data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                        <input
                                            type="text"
                                            id="newPassword"
                                            class="form-control"
                                            name="new_password"
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
