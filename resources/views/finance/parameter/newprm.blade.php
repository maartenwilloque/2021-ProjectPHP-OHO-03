@extends('layouts.template')
@section('title','Nieuwe parameter')
@section('main')
    <div class="row">
        <div class="col-11 offset-1">
            {{--        Logo--}}
            <div class="row justify-content-center">
                <img src="/assets/logo/MyExpenseLogo.png" class="mobilelogo d-md-none" alt="My expense Logo">
            </div>
            {{--            Parameter updaten--}}
            <h5 class="display-5 mt-2">Nieuwe parameter toevoegen</h5>
            <form action="/finance/parameter" method="post">
                @method('post')
                @csrf
                <div class="form-group row">
                    <div col-1></div>
                    <div class="col-3">
                        <select class="form-control" name="parameter" id="parameter">
                            <option value="" selected disabled hidden>Parameter Types</option>
                            @foreach($prmTypes as $prmType)
                                <option value="{{ $prmType->id }}">{{ $prmType->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div col-1></div>
                    <div class="col-3">
                        <label for="value"
                               class="col-form-label text-md-right">{{ __('Euro') }}</label>
                        <div class="">
                            <input id="value" type="text"
                                   class="form-control read"
                                   name="value" >
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div col-1></div>
                    <div class="col-3">
                        <label for="fromdate"
                               class="col-form-label text-md-right">{{ __('Van Datum') }}</label>
                        <div class="">
                            <input id="fromdate" type="date" value="date()"
                                   class="form-control read"
                                   name="fromdate" >
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div col-1>
                        <div col-3>
                        </div>
                            <input class="ml-3" type="checkbox" name="active[]" value="" id="activeTrue"
                                   checked>
                            <label class="ml-0" for="activeTrue">
                                Active
                            </label>
                    </div>
                </div>
                <div class="form-group row">
                    <div col-1></div>
                    <div class="col-3">
                        <button type="submit" class="rounded">Voeg parameter toe</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
