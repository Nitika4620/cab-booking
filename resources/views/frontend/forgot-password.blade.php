@extends('layouts.frontend-layout')

@section('content')
    <div class="login-area py-120">
        <div class="container">
            <div class="col-md-5 mx-auto">
                <div class="login-form">
                    <div class="login-header">
                        <img src="{{ asset('assets/img/logo/logo.png') }}" alt>
                        <p>Reset your Taxica account password</p>
                    </div>
                    <form action="#">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="d-flex align-items-center">
                            <button type="submit" class="theme-btn"><i class="far fa-key"></i> Send Reset
                                Link</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
