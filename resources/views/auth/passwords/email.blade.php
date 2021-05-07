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
                    <h3 class="display-4 mb-5">Reset Paswoord</h3>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-12">
                                <input id="email" type="email" placeholder="Email-adres"
                                       class="rounded-pill border-0 shadow-sm px-4 form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-dark btn-block text-uppercase mb-2 rounded-pill shadow-sm">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
