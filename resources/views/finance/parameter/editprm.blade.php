@extends('layouts.template')
@section('title','Update Parameter Active')
@section('main')
    <div class="row">
        <div class="col-11 offset-1">
            {{--        Logo--}}
            <div class="row justify-content-center">
                <img src="/assets/logo/MyExpenseLogo.png" class="mobilelogo d-md-none" alt="My expense Logo">
            </div>
            {{--            Parameter updaten--}}
            <h5 class="display-5 mt-2">Update parameters</h5>
            <form action="/finance/parameter/{{ $parameter->id}}" method="post">
                @method('put')
                @csrf
                <div class="form-group row">
                    <div col-1></div>
                    <div class="col-3">
                        <label for="type"
                               class="col-form-label text-md-right">{{ ('Type') }}</label>
                        <div class="">
                            <input id="type" type="text" readonly
                                   class="form-control read"
                                   name="type" value={{ $parameter->type_id}}>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div col-1></div>
                    <div class="col-3">
                        <label for="value"
                               class="col-form-label text-md-right">{{ __('Euro') }}</label>
                        <div class="">
                            <input id="value" type="text" readonly
                                   class="form-control read"
                                   name="value" value={{ $parameter->value}}>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div col-1></div>
                    <div class="col-3">
                        <label for="fromdate"
                               class="col-form-label text-md-right">{{ __('Van Datum') }}</label>
                        <div class="">
                            <input id="fromdate" type="date" readonly
                                   class="form-control read"
                                   name="type" value={{ $parameter->from_date}} >
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div col-1></div>
                    <div class="col-3">
                        <label for="todate"
                               class="col-form-label text-md-right">{{ __('Tot Datum') }}</label>
                        <div class="">
                            <input id="todate" type="date" readonly
                                   class="form-control read"
                                   name="type" value={{ $parameter->to_date}} >
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div col-1>
                        <div col-3>
                        </div>
                        @if($parameter->active ==1)
                            <input class="ml-3" type="checkbox" name="active[]" value="" id="activeTrue"
                                   checked>
                            <label class="ml-0" for="activeTrue">
                                Active
                            </label>
                        @else
                            <input class="ml-3" type="checkbox" name="active[]" value=""
                                   id="activeFalse">
                            <label class="ml-0" for="activeFalse">
                                Active
                            </label>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div col-1></div>
                    <div class="col-3">
                        <button type="submit" class="rounded">Update Profiel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
