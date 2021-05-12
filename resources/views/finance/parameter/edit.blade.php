@extends('layouts.template')
@section('title','Update parameter')
@section('main')
    <div class="row">
        {{--        marge--}}
        <div class="col-1"></div>
        {{--        marge--}}
        {{--        parameter--}}
        <div class="col-5">
            {{--        Logo--}}
            {{--            <div class="row justify-content-center pb-5">--}}
            {{--                <img src="/assets/logo/MyExpenseLogo.png" class="mobilelogo d-md-none" alt="My expense Logo">--}}
            {{--            </div>--}}
            {{--            User updaten--}}
            @method('put')
            @csrf
            {{--            <h5 class="display-5">Update parameters: {{ $parametersTypes->id }}</h5>--}}
            <form action="/finance/parameter/{{$id ?? ''}}" method="post">
                @method('put')
                @csrf
                <div class="form-group row">
                    <div class="col-6">
                        {{--                        <label for="current_password"--}}
                        {{--                               class="col-form-label text-md-right">{{ __('Huidig paswoord') }}</label>--}}
                        {{--                        <div class="">--}}
                        {{--                            <input id="current_password" type="password"--}}
                        {{--                                   class="form-control @error('current_password') is-invalid @enderror"--}}
                        {{--                                   name="current_password" value="{{ old('current_password' ) }}" required--}}
                        {{--                                   autofocus>--}}
                        {{--                            @error('current_password')--}}
                        {{--                            <span class="invalid-feedback" role="alert">--}}
                        {{--                                                                        <strong>{{ $message }}</strong>--}}
                        {{--                                                                    </span>--}}
                        {{--                            @enderror--}}
                        {{--                        </div>--}}
                        {{--                        <label for="prmtype"--}}
                        {{--                               class="col-form-label text-md-right">{{ __('Type) }}</label>--}}
                        {{--                        <select class="form-control form-control-sm">--}}
                        {{--                            <option>Small select</option>--}}
                        {{--                        </select>--}}
                        <div class="">
                            {{--                                                    <input id="prmtype" type=""--}}
                            {{--                                                           class="form-control @error('prmtype') is-invalid @enderror"--}}
                            {{--                                                           name="prmtype" value="{{ old('prmtype' ) }}" required--}}
                            {{--                                                           autofocus>--}}
                            {{--                                                    @error('prmtype')--}}
                            {{--                                                    <span class="invalid-feedback" role="alert">--}}
                            {{--                         <strong>{{ $message }}</strong></span>--}}
                            {{--                                                    @enderror--}}
                            {{--                                                    <label for="prmtype"--}}
                            {{--                                                                                   class="col-form-label text-md-right">{{ __('Type) }}</label>--}}
                            {{--                            <select class="form-control form-control-sm">--}}
                            {{--                                {{ Form::select('organization_id', $items}}--}}
                            {{--                            </select>--}}
                            {{--                            <div class="form-group">--}}
                            {{--                                <label for="prmType">Select Type:</label>--}}
                            {{--                                <select name="prmType" class="form-control" style="width:250px">--}}
                            {{--                                    <option value="">--- Select Type---</option>--}}
                            {{--                                    @foreach ($prmTypes as $key => $value)--}}
                            {{--                                        <option value="{{ $key }}">{{ $value }}</option>--}}
                            {{--                                    @endforeach--}}
                            {{--                                </select>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                    <div class="col-6"></div>
                    {{--                    <div class="col-6">--}}
                    {{--                        <label for="password"--}}
                    {{--                               class="col-form-label text-md-right">{{ __('Nieuw paswoord') }}</label>--}}
                    {{--                        <div class="">--}}
                    {{--                            <input id="password" type="password"--}}
                    {{--                                   class="form-control @error('password') is-invalid @enderror"--}}
                    {{--                                   name="password"--}}
                    {{--                                   value="{{ old('password' ) }}" required autofocus>--}}
                    {{--                            @error('password')--}}
                    {{--                            <span class="invalid-feedback" role="alert">--}}
                    {{--                                                                        <strong>{{ $message }}</strong>--}}
                    {{--                                                                    </span>--}}
                    {{--                            @enderror--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
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
@endsection
