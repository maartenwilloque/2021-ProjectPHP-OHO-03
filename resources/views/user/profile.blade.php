@extends('layouts.template')
@section('title','My Expense Profiel')
@section('main')
    <div class="row">
        <div class="col-5 offset-1">
            {{--        Logo--}}
            <div class="row justify-content-center">
                <img src="/assets/logo/MyExpenseLogo.png" class="mobilelogo d-md-none" alt="My expense Logo">
            </div>
            {{--            Profiel updaten--}}
            <h4 class="display-5 mt-2">Profiel</h4>
            <div class="detailmainbox border">
                <form method="POST" action="{{ '/user/profile'}}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-6">
                            <label for="name"
                                   class="col-form-label text-md-right px-4">{{ __('Naam') }}</label>
                            <div class="">
                                <input id="name" type="text"
                                       class="rounded-pill border-0 shadow-sm px-4 form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name', auth()->user()->name ) }}" required
                                       autocomplete="name"
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
                                   class="col-form-label text-md-right px-4">{{ __('Voornaam') }}</label>
                            <div class="">
                                <input id="firstname" type="text"
                                       class="rounded-pill border-0 shadow-sm px-4 form-control @error('firstname') is-invalid @enderror"
                                       name="firstname"
                                       value="{{ old('firstname', auth()->user()->firstname ) }}" required
                                       autocomplete="firstname" autofocus>
                                @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-5">
                            <label for="street"
                                   class="col-form-label text-md-right px-4">{{ __('Straat') }}</label>
                            <div class="">
                                <input id="street" type="text"
                                       class="rounded-pill border-0 shadow-sm px-4 form-control @error('street') is-invalid @enderror"
                                       name="street" value="{{ old('street', auth()->user()->street ) }}"
                                       required autocomplete="street"
                                       autofocus>
                                @error('street')
                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-2">
                            <label for="number"
                                   class="col-form-label text-md-right px-4">{{ __('Nr') }}</label>
                            <div class="">
                                <input id="number" type="text"
                                       class="rounded-pill border-0 shadow-sm px-4 form-control @error('number') is-invalid @enderror"
                                       name="number"
                                       value="{{ old('number', auth()->user()->number ) }}" required
                                       autocomplete="number" autofocus>
                                @error('number')
                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-5">
                            <label for="gsm"
                                   class="col-form-label text-md-right px-4">{{ __('GSM nummer') }}</label>
                            <div class="">
                                <input id="gsm" type="text"
                                       class="rounded-pill border-0 shadow-sm px-4 form-control @error('gsm') is-invalid @enderror"
                                       name="gsm"
                                       value="{{ old('gsm', auth()->user()->gsm ) }}" required
                                       autocomplete="gsm" autofocus>
                                @error('gsm')
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
                                   class="col-form-label text-md-right px-4">{{ __('Gemeente') }}</label>
                            <div class="">
                                <input id="city" type="text"
                                       class=" rounded-pill border-0 shadow-sm px-4 form-control @error('city') is-invalid @enderror"
                                       name="city" value="{{ old('city', auth()->user()->city ) }}" required
                                       autocomplete="city"
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
                                   class="col-form-label text-md-right px-4">{{ __('Email') }}</label>
                            <div class="">
                                <input id="email" type="text"
                                       class=" rounded-pill border-0 shadow-sm px-4 form-control @error('email') is-invalid @enderror"
                                       name="email"
                                       value="{{ old('email', auth()->user()->email ) }}" required
                                       autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <button type="submit"
                                    class="btn btn-dark btn-block text-uppercase mb-2 rounded-pill shadow-sm submitbtn">
                                {{ __('Update Profiel') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{--        einde profiel--}}
        {{--        marge--}}
        <div class="col-md-1"></div>
        {{--        marge--}}
        {{--        Paswoord--}}
        <div class="col-sm-12 col-md-4">
            <div class="row justify-content-center">
                {{--                <img src="/assets/logo/MyExpenseLogo.png" class="mobilelogo d-md-none" alt="My expense Logo">--}}
            </div>
            <h4 class="display-5 mt-2">Paswoord</h4>
            <div class="detailmainbox border">
                <form method="POST" action="{{ '/user/password'}}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-6">
                            <label for="current_password"
                                   class="col-form-label text-md-right px-4">{{ __('Huidig paswoord') }}</label>
                            <div class="">
                                <input id="current_password" type="password"
                                       class=" rounded-pill border-0 shadow-sm px-4 form-control @error('current_password') is-invalid @enderror"
                                       name="current_password" value="{{ old('current_password' ) }}" required
                                       autofocus>
                                @error('current_password')
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <label for="current_password"
                                   class="col-form-label text-md-right px-4">{{ __('Nieuw paswoord') }}</label>
                            <div class="">
                                <input id="password" type="password"
                                       class=" rounded-pill border-0 shadow-sm px-4 form-control @error('password') is-invalid @enderror"
                                       name="password"
                                       value="{{ old('password' ) }}" required autofocus>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6"></div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="col-6">
                            <button type="submit"
                                    class="btn btn-dark btn-block text-uppercase mb-2 rounded-pill shadow-sm submitbtn">
                                {{ __('Update paswoord') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{--        einde paswoord--}}
        {{--        marge--}}
        <div class="col-md-1"></div>
        {{--        marge--}}
    </div>
@endsection
