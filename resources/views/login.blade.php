@extends('layouts.main')
@section('content')
    <section class="login">
        <div class="container login__container">
            <div class="row">
                <h1 class="col-lg-8">Войдите в свою учетную запись</h1>
                <form action="#" method="post" class="login__form col-lg-4">
                    <label>
                        <input type="email" name="email" id="email" placeholder="Email" class="login__form-field">
                    </label>
                    <label>
                        <input type="password" name="password" id="password" placeholder="Password"
                               class="login__form-field">
                    </label>
                    <input type="submit" value="Login" id="login" class="login__btn">
                </form>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="{{ asset('/js/login.js') }}"></script>
@endsection
