@extends('layouts.bootstrapLayout')

@section('menu')
    @include('menu.main')
@endsection

@section('content')
    <section class="user-registration">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <form name="my-form">
                                <div class="form-group row">
                                    <label for="firs_name" class="col-md-4 col-form-label text-md-right">Fits
                                        Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="firs_name" class="form-control" name="firs-name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="last_name" class="col-md-4 col-form-label text-md-right">Last
                                        Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="last_name" class="form-control" name="last-name">
                                    </div>
                                </div>


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
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
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
