@extends('layouts.template')
@section('title','My Expense Paswoord')
@include('shared.navigation')
@section('main')
    {{--    <div class="container-fluid">--}}
    {{--        <div class="row justify-content-center">--}}
    {{--            <div class="col-md-8">--}}
    {{--                <div class="card col-sm-12">--}}
    {{--                    <div--}}
    {{--                        class="bg-transparent  color_Orange font-weight-bolder text-center border-bottom border-left border-right">{{ __('Update My Expense paswoord!') }}</div>--}}
    {{--                    <div class="card-body">--}}
    {{--                        <form method="POST" action="{{ '/user/password'}}">--}}
    {{--                            @csrf--}}
    {{--                            <div class="form-group row">--}}
    {{--                                <div class="col-6">--}}
    {{--                                    <label for="current_password"--}}
    {{--                                           class="col-form-label text-md-right">{{ __('Huidig paswoord') }}</label>--}}
    {{--                                    <div class="">--}}
    {{--                                        <input id="current_password" type="password"--}}
    {{--                                               class="form-control @error('current_password') is-invalid @enderror"--}}
    {{--                                               name="current_password" value="{{ old('current_password' ) }}" required--}}
    {{--                                               autofocus>--}}
    {{--                                        @error('current_password')--}}
    {{--                                        <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                        @enderror--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-6">--}}
    {{--                                    <label for="password"--}}
    {{--                                           class="col-form-label text-md-right">{{ __('Nieuw paswoord') }}</label>--}}
    {{--                                    <div class="">--}}
    {{--                                        <input id="password" type="password"--}}
    {{--                                               class="form-control @error('password') is-invalid @enderror"--}}
    {{--                                               name="password"--}}
    {{--                                               value="{{ old('password' ) }}" required autofocus>--}}
    {{--                                        @error('password')--}}
    {{--                                        <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                        @enderror--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="form-group row">--}}
    {{--                                <div class="col-6">--}}
    {{--                                    <label for="password_confirmation"--}}
    {{--                                           class="col-form-label text-md-right">{{ __('Bevestig paswoord') }}</label>--}}
    {{--                                    <div class="">--}}
    {{--                                        <input id="password_confirmation" type="password"--}}
    {{--                                               class="form-control @error('password_confirmation') is-invalid @enderror"--}}
    {{--                                               name="password_confirmation"--}}
    {{--                                               value="{{ old('password_confirmation') }}" required autofocus>--}}
    {{--                                        @error('password_confirmation')--}}
    {{--                                        <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                        @enderror--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="form-group row">--}}
    {{--                                <div class="col-12">--}}
    {{--                                    <button type="submit" class="color_Orange_Back rounded-sm">--}}
    {{--                                        {{ __('Update') }}--}}
    {{--                                    </button>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </form>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--@endsection--}}
    <div class=" row d-flex align-items-center py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-7 mx-auto pb-5">
                    <div class="row justify-content-center pb-5">
                        <img src="/assets/logo/MyExpenseLogo.png" class="mobilelogo d-md-none" alt="My expense Logo">
                    </div>
                    <h3 class="display-4 mb-5">Paswoord</h3>
                    <form method="POST" action="{{ '/user/password'}}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-6">
                                <label for="current_password"
                                       class="col-form-label text-md-right">{{ __('Huidig paswoord') }}</label>
                                <div class="">
                                    <input id="current_password" type="password"
                                           class="form-control @error('current_password') is-invalid @enderror"
                                           name="current_password" value="{{ old('current_password' ) }}" required
                                           autofocus>
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
                            <div class="col-12">
                                <button type="submit" class="rounded">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
