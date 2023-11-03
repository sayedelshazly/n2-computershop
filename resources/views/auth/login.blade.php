@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-1">
        </div>
        <div class="col-md-4 mt-5">
            <h1 class="text-warning text-uppercase">Login Now!!</h1>
            <p class="text-warning mt-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Natus voluptatum repudiandae <br>dignissimos reprehenderit eius aliquam provident<br> 
                quos qui possimus corrupti beatae? <br>At exercitationem praesentium expedita magnam.

            </p>
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-6 mt-5">
            <div class="card border border-warning">
                <div class="card-header text-warning bg-dark">{{ __('Login') }}</div>

                <div class="card-body bg-dark">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end text-uppercase text-warning">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control border border-warning bg-dark text-warning shadow-none @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end text-uppercase text-warning">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control border border-warning bg-dark text-warning shadow-none @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input  border border-warning bg-dark text-warning shadow-none" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-uppercase text-warning" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-warning">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-warning" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div><br><br>
<p class="  border border-2 p-2 border-warning  border-bottom-0  border-start-0 border-end-0 mt-5"></p>
<p class="  border border-2 p-2 border-light  border-bottom-0  border-start-0 border-end-0 mt-2"></p>
<p class="  border border-2 p-2 border-light  border-bottom-0  border-start-0 border-end-0 mt-5"></p>
<p class="  border border-2 p-2 border-warning  border-bottom-0  border-start-0 border-end-0 mt-2"></p>
@endsection
