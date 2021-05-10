@extends('layouts.template')
@section('title','Update parameter')
@include('shared.navigation')
@section('main')
    <form action="/finance/parameter/{{ $parameterstype->id }}" method="post">
        @method('put')
        @csrf
            <h5 class="display-5">Update parameters: {{ $parameterstype->id }}</h5>
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
                    <div class="col-6"> </div>
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
@endsection
