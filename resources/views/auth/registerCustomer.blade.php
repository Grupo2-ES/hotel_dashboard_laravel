@extends('layouts.app')
@section('content')
    <div class="header">
        <div class="header-left">
            <a href="{{ url('/') }}" class="logo"> <img src="{{ URL::to('assets/img/hotel_logo.png') }}" width="50"
                    height="70" alt="logo"> <span class="logoclass">HOTEL</span> </a>
            <a href="{{ url('/') }}l" class="logo logo-small"> <img src="{{ URL::to('assets/img/hotel_logo.png') }}"
                    alt="Logo" width="30" height="30"> </a>
        </div>
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
                <div class="container">
                    <div class="loginbox">
                        <div class="login-left"> <img class="img-fluid" src="assets/img/logo.png" alt="Logo"> </div>
                        <div class="login-right">
                            <div class="login-right-wrap">
                                <h1 class="mb-3">Register</h1>
                                <form method="POST" action="{{ route('registerCustomer') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            placeholder="Enter Name" value="{{ old('name') }}" required
                                            autocomplete="name" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            placeholder="Enter Email" value="{{ old('email') }}" required
                                            autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            placeholder="Enter Password" required autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" placeholder="Confirm Password" required
                                            autocomplete="off">
                                    </div>
                                    <div class="form-group mb-0">
                                        <button class="btn btn-primary btn-block" type="submit">Register</button>
                                    </div>
                                </form>
                                <div class="login-or">
                                    <span class="or-line"></span>
                                    <span class="span-or">or</span>
                                </div>
                                <div class="text-center dont-have">Already have an account?
                                    <a href="{{ route('loginCustomer') }}">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
