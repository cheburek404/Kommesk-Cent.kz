@extends('layouts.app')

@section('content')
{{--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="button btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}

<div class="login">
    <div class="form">
        <h2><img src="https://cent.kz/images/logo8.png" alt="logo"></h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-field">
                <label for="login-mail"><i class="fa fa-user"></i></label>
                <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name">
            </div>
            <div class="form-field">
                <label for="login-mail"><i class="fa fa-envelope"></i></label>
                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
            </div>
            <div class="form-field">
                <label for="login-password"><i class="fa fa-lock"></i></label>
                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
            </div>
            <div class="form-field">
                <label for="login-password"><i class="fa fa-lock"></i></label>
                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Password confirm">
            </div>
            <button type="submit" class="button">
                <div class="arrow-wrapper">
                    <span class="arrow"></span>
                </div>
                <p class="button-text">SIGN UP</p>
            </button>
            <div class="row mb-4">
                <div class="col-md-12 offset-md-0">
                    <a href="{{ route('login') }}" class="acc button btn-link">Have you account?</a>
                    <a href="{{ route('user.home') }}" class="back btn-info">Back to main page</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
