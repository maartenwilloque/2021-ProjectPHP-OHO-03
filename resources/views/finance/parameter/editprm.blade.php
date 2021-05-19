@extends('layouts.template')
@section('title','Update Parameter')
@section('main')
    <div class="row">
        <div class="col-11 offset-1">
            <div class="row justify-content-center">
                <img src="/assets/logo/MyExpenseLogo.png" class="mobilelogo d-md-none" alt="My expense Logo">
            </div>
            <h5 class="display-5 mt-2">Update Type</h5>
            <form action="/finance/parameterType/{{ $parameterType->id}}" method="post">
                @method('put')
                @csrf
                <div class="form-group row">
                    <div col-1></div>
                    <div class="col-3">
                        <label for="name"
                               class="col-form-label text-md-right">{{ ('Type') }}</label>
                        <div class="">
                            <input id="name" type="text"
                                   class="form-control"
                                   name="name" value={{ $parameterType->name}}>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div col-1></div>
                    <div class="col-3">
                        <button type="submit" class="rounded">Update Type</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
