@extends('layouts.templateExternal')
@section('image')
    <div class="row mx-auto my-auto">
        <img src="/assets/logo/MyExpenseLogo.png" class="loginLogo" alt="My expense Logo">
    </div>
@endsection
@section('main')
    <div class=" row pt-3 pr-3 float-right">
        <a href="/">
            <i class="fas fa-chevron-circle-left registericon"></i>
        </a>
    </div>
    <div class=" row login d-flex align-items-center py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-7 mx-auto">
                    <h3 class="display-4 mb-5">Nieuwe gebruiker</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row flex-wrap">
                            <div class="col-lg-6 my-1 my-lg-0 ">
                                <input id="name" type="text" placeholder="Naam"
                                       class="rounded-pill border-0 shadow-sm px-4 form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name"
                                       autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 my-1 my-lg-0 ">
                                <input id="firstname" type="text" placeholder="Voornaam"
                                       class="rounded-pill border-0 shadow-sm px-4 form-control @error('firstname') is-invalid @enderror"
                                       name="firstname"
                                       value="{{ old('firstname') }}" required autocomplete="firstname"
                                       autofocus>
                                @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-5 col-8 my-1 my-lg-0">
                                <div class="">
                                    <input id="street" type="text" placeholder="Straat"
                                           class="rounded-pill border-0 shadow-sm px-4 form-control @error('street') is-invalid @enderror"
                                           name="street" value="{{ old('street') }}" required autocomplete="street"
                                           autofocus>
                                    @error('street')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4 col-lg-3 my-1 my-lg-0">
                                <div class="">
                                    <input id="number" type="text" placeholder="Nr."
                                           class=" rounded-pill border-0 shadow-sm px-4 form-control @error('number') is-invalid @enderror"
                                           name="number"
                                           value="{{ old('number') }}" required autocomplete="number" autofocus>
                                    @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 my-1 my-lg-0">
                                <input id="city" type="text" placeholder="Gemeente"
                                       class="rounded-pill border-0 shadow-sm px-4 form-control @error('city') is-invalid @enderror"
                                       name="city" value="{{ old('city') }}" required autocomplete="city"
                                       autofocus>
                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-lg-7 my-1 my-lg-0">
                                <input id="email" type="text" placeholder="E-mail"
                                       class="rounded-pill border-0 shadow-sm px-4 form-control @error('email') is-invalid @enderror"
                                       name="email"
                                       value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 col-lg-5 my-1 my-lg-0">
                                    <input id="gsm" type="text" placeholder="GSM"
                                           class="rounded-pill border-0 shadow-sm px-4 form-control @error('gsm') is-invalid @enderror"
                                           name="gsm"
                                           value="{{ old('gsm') }}" required autofocus>
                                    @error('gsm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>

                        </div>
                        <div class="form-group row ">
                            <div class="col-12 col-lg-6 my-1 my-lg-0">
                                <div class="">
                                    <input id="password" type="password" placeholder="Paswoord"
                                           class="rounded-pill border-0 shadow-sm px-4 form-control @error('password') is-invalid @enderror"
                                           name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 my-1 my-lg-0">
                                <div class="">
                                    <input id="password-confirm" placeholder="Herhaal Paswoord" type="password"
                                           class=" rounded-pill border-0 shadow-sm px-4 form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-dark btn-block text-uppercase mb-2 rounded-pill shadow-sm">
                                    {{ __('Registreer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


