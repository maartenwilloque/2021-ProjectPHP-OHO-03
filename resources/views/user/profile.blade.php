@extends('layouts.template')
@section('title','My Expense Profiel')
@section('main')
    <div class="row justify-content-center m-auto">
        {{--        marge--}}
        <div class="col-md-1"></div>
        {{--        marge--}}
        {{--        profiel--}}
        <div class="col-sm-12 col-md-4">
            {{--        Logo--}}
            <div class="row justify-content-center">
                <img src="/assets/logo/MyExpenseLogo.png" class="mobilelogo d-md-none" alt="My expense Logo">
            </div>
            {{--            Profiel updaten--}}
            <h5 class="display-5 mt-2">Profiel</h5>
            <form method="POST" action="{{ '/user/profile'}}">
                @csrf
                <div class="form-group row">
                    <div class="col-6">
                        <label for="name"
                               class="col-form-label text-md-right">{{ __('Naam') }}</label>
                        <div class="">
                            <input id="name" type="text"
                                   class="form-control @error('name') is-invalid @enderror"
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
                               class="col-form-label text-md-right">{{ __('Voornaam') }}</label>
                        <div class="">
                            <input id="firstname" type="text"
                                   class="form-control @error('firstname') is-invalid @enderror"
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
                               class="col-form-label text-md-right">{{ __('Straat') }}</label>
                        <div class="">
                            <input id="street" type="text"
                                   class="form-control @error('street') is-invalid @enderror"
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
                               class="col-form-label text-md-right">{{ __('Nr') }}</label>
                        <div class="">
                            <input id="number" type="text"
                                   class="form-control @error('number') is-invalid @enderror"
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
                               class="col-form-label text-md-right">{{ __('GSM nummer') }}</label>
                        <div class="">
                            <input id="gsm" type="text"
                                   class="form-control @error('gsm') is-invalid @enderror"
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
                               class="col-form-label text-md-right">{{ __('Gemeente') }}</label>
                        <div class="">
                            <input id="city" type="text"
                                   class="form-control @error('city') is-invalid @enderror"
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
                               class="col-form-label text-md-right">{{ __('Email') }}</label>
                        <div class="">
                            <input id="email" type="text"
                                   class="form-control @error('email') is-invalid @enderror"
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
                        <button type="submit" class="rounded">
                            {{ __('Update Profiel') }}
                        </button>
                    </div>
                </div>
            </form>
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
            <h5 class="display-5 mt-2">Paswoord</h5>
            <form method="POST" action="{{ '/user/password'}}">
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
                    <div class="col-6"></div>
                </div>
                <div class="form-group row">
                    <div class="col-6">
                        <label for="current_password"
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
                    <div class="col-6"></div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-12">
                        <button type="submit" class="rounded">
                            {{ __('Update paswoord') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
        {{--        einde paswoord--}}
        {{--        marge--}}
        <div class="col-md-1"></div>
        {{--        marge--}}
    </div>
@endsection
