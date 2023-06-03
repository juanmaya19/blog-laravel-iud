@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg">
                <div class="card-body p-5">
                    <h3 class="card-title text-center mb-4">{{ __('Login') }}</h3>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-floating mb-3">
                            <input id="email" type="email" class="form-control rounded-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label for="email">{{ __('Email address') }}</label>

                            @error('email')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input id="password" type="password" class="form-control rounded-0 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <label for="password">{{ __('Password') }}</label>

                            @error('password')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                        </div>

                        <button type="submit" class="btn btn-success w-100 mt-3">{{ __('Login') }}</button>

                        @if (Route::has('password.request'))
                        <div class="text-center pt-3">
                            <a href="{{ route('password.request') }}" class="text-decoration-none">{{ __('Forgot Your Password?') }}</a>
                        </div>
                        @endif
                    </form>
                </div>

                <div class="card-footer py-3 text-center">
                    {{ __('Don\'t have an account?') }} <a href="{{ route('register') }}" class="text-decoration-none">{{ __('Register') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

