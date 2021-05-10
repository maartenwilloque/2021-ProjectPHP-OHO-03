@extends('layouts.template')
@section('title','My Expense Profiel')
@section('main')
    <div class=" row d-flex align-items-center py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-7 mx-auto pb-5">
                    <div class="row justify-content-center pb-5">
                        <img src="/assets/logo/MyExpenseLogo.png" class="mobilelogo d-md-none" alt="My expense Logo">
                    </div>
                    <h3 class="display-4 mb-5">Profiel</h3>
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
                                           autocomplete="name" autofocus>
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
