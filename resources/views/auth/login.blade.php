@extends('layouts.template')
@section('title','My Expense Login')
@section('main')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card col-sm-12">
                    <div
                        class="bg-transparent  color_Orange font-weight-bolder text-center border-bottom border-left border-right">{{ __('Welkom op My Expense Login!') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-8">
                                    <div class="form-group row">
                                        <label for="email"
                                               class="col-md-5 col-form-label text-md-left">{{ __('E-Mail') }}</label>
                                        <div class="col-md-7">
                                            <input id="email" type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email"
                                                   value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password"
                                               class="col-md-5 col-form-label text-md-left">{{ __('Paswoord') }}</label>
                                        <div class="col-md-7">
                                            <input id="password" type="password"
                                                   class="form-control @error('password') is-invalid @enderror"
                                                   name="password"
                                                   required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-5">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label small" for="remember">
                                                    {{ __('Onthouden') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-12 offset-md-5">
                                            <button type="submit" class="rounded">
                                                {{ __('Login') }}
                                            </button>
                                            @if (Route::has('password.request'))
                                                <a class="small ml-3" href="{{ route('password.request') }}">
                                                    {{ __('Oops...vergeten? Klik hier') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
