@extends('layouts.templateExternal')
@section('title','MyExpense Login')
@section('image')
    <div class="row mx-auto my-auto">
        <img src="/assets/logo/MyExpenseLogo.png" class="loginLogo" alt="My expense Logo">
    </div>
@endsection
@section('main')
    <div class=" row pt-3 pr-3 float-right">
        <a href="/register">
            <i class="fas fa-user-plus registericon"></i>
        </a>
    </div>
    <div class=" row login d-flex align-items-center py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-7 mx-auto pb-5">
                    <div class="row justify-content-center pb-5">
                        <img src="/assets/logo/MyExpenseLogo.png" class="mobilelogo d-md-none" alt="My expense Logo">
                    </div>
                    <h3 class="display-4 mb-5">My Expense</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <input id="email" type="email"
                                   class="rounded-pill border-0 shadow-sm px-4 form-control @error('email') is-invalid @enderror"
                                   name="email" placeholder="E-mail adres"
                                   value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <input id="password" type="password"
                                   class=" rounded-pill border-0 shadow-sm px-4 form-control @error('password') is-invalid @enderror"
                                   name="password" placeholder="Paswoord"
                                   required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div class="form-group ">
                            <div class="form-check pl-5">
                                <input class="form-check-input" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label small" for="remember">
                                    {{ __('Onthouden') }}
                                </label>
                            </div>
                        </div>
                        <div class="form-group  mt-5">
                            <button type="submit"
                                    class="btn btn-dark btn-block text-uppercase mb-2 rounded-pill shadow-sm">
                                {{ __('Login') }}
                            </button>
                            @if (Route::has('password.request'))
                                <a class="small pl-4" href="{{ route('password.request') }}">
                                    {{ __('Oops...vergeten? Klik hier') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
