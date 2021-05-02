@extends('layouts.template')
@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('MY Expense: User registration') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="name"
                                           class="col-form-label text-md-right">{{ __('Name') }}</label>
                                    <div class="">
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror"
                                               name="name" value="{{ old('name') }}" required autocomplete="name"
                                               autofocus>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="firstname"
                                           class="col-form-label text-md-right">{{ __('Firstname') }}</label>
                                    <div class="">
                                        <input id="firstname" type="text"
                                               class="form-control @error('firstname') is-invalid @enderror"
                                               name="firstname"
                                               value="{{ old('firstname') }}" required autocomplete="name" autofocus>
                                        @error('firstname')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="street"
                                           class="col-form-label text-md-right">{{ __('Street') }}</label>
                                    <div class="">
                                        <input id="street" type="text"
                                               class="form-control @error('street') is-invalid @enderror"
                                               name="street" value="{{ old('street') }}" required autocomplete="name"
                                               autofocus>
                                        @error('street')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-3">
                                    <label for="number"
                                           class="col-form-label text-md-right">{{ __('Number') }}</label>
                                    <div class="">
                                        <input id="number" type="text"
                                               class="form-control @error('number') is-invalid @enderror"
                                               name="number"
                                               value="{{ old('number') }}" required autocomplete="name" autofocus>
                                        @error('number')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="city"
                                           class="col-form-label text-md-right">{{ __('City') }}</label>
                                    <div class="">
                                        <input id="city" type="text"
                                               class="form-control @error('city') is-invalid @enderror"
                                               name="city" value="{{ old('city') }}" required autocomplete="name"
                                               autofocus>
                                        @error('city')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="email"
                                           class="col-form-label text-md-right">{{ __('Email') }}</label>
                                    <div class="">
                                        <input id="email" type="text"
                                               class="form-control @error('email') is-invalid @enderror"
                                               name="email"
                                               value="{{ old('email') }}" required autocomplete="name" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="password"
                                           class="col-form-label text-md-right">{{ __('Password') }}</label>
                                    <div class="">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password"
                                               required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="password-confirm"
                                           class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                    <div class="">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required autocomplete="new-password">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    {{--                                    <button type="submit" class="btn btn-primary">--}}
                                    <button type="submit" class="color_Orange_Back rounded-sm">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


