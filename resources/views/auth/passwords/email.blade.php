@extends('layouts.app')

@section('content')
{{--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
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
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-field">
                <label for="login-mail"><i class="fa fa-envelope"></i></label>
                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
            </div>
            <button type="submit" class="button">
                <div class="arrow-wrapper">
                    <span class="arrow"></span>
                </div>
                <p class="button-text">Send Password Reset Link</p>
            </button>
            <div class="row mb-4">
                <div class="col-md-12 offset-6">
                    <a href="{{ route('login') }}" class="back btn-info">Back to login page</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
