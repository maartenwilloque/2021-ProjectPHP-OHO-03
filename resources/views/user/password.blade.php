@extends('layouts.template')
@section('title','My Expense Profile')
@section('main')
    @include('shared.alert')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card col-sm-12">
                    <div class="card-header">{{ __('MyExpense: Update paswoord') }}</div>
                    <div class="card-body">
                        <form action="/user/password" method="post">
                            @csrf
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="current_password"
                                           class="col-form-label text-md-right">{{ __('Huidig paswoord') }}</label>
                                    <div class="">
                                        <input id="current_password" type="password"
                                               class="form-control @error('current_password') is-invalid @enderror"
                                               name="current_password" value="{{ old('current_password' ) }}" required autofocus>
                                        @error('current_password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="password"
                                           class="col-form-label text-md-right">{{ __('Nieuw paswoord') }}</label>
                                    <div class="">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password"
                                               value="{{ old('password' ) }}" required autofocus>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="password_confirmation"
                                           class="col-form-label text-md-right">{{ __('Bevestig paswoord') }}</label>
                                    <div class="">
                                        <input id="password_confirmation" type="password"
                                               class="form-control @error('password_confirmation') is-invalid @enderror"
                                               name="password_confirmation"
                                               value="{{ old('password_confirmation') }}" required autofocus>
                                        @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <button type="submit" class="color_Orange_Back rounded-sm">
                                        {{ __('Update') }}
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
