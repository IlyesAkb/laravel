@extends('layouts.bootstrapLayout')

@section('menu')
    @include('menu.main')
@endsection

@section('content')
    <section class="login">
        <div class="container login__container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Войти</div>
                        <div class="card-body">
                            <form name="my-form">
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail
                                        Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email-address">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4 align-items-center">
                                        <label for="remember" class="form-check-label">

                                            <input type="checkbox" name="remember" id="remember" class="form-check-inline">
                                            <span>Запоинить меня</span>

                                        </label>
                                    </div>

                                </div>
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Войти
                                    </button>
                                </div>
                                <div class="col-md-6 offset-md-4">
                                    <a href="{{ route('user.registration') }}" class="registration-link">Еще не зарегестрированы?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        {{--        </div>--}}
    </section>
@endsection
@section('scripts')
    <script src="{{ asset('/js/login.js') }}"></script>
@endsection
