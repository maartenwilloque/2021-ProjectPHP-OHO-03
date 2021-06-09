@extends('layouts.template')
@section('title','Myexpense: Overzicht')
@section('main')
    {{--    table--}}
    <div class="row justify-content-center m-auto">
        <div class="col-10 offset-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h3 class="subheadertitle">Overzicht</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <h4 class="mt-2">Mijn Onkosten</h4>
                    </div>
                    <div class="col-6 text-right">
                        <i class="far fa-plus-square btn btn-create" data-toggle="modal"
                           data-target="#createExpensemodal" style="color: orangered !important; font-size: 20px;"
                        ></i>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 detailmainbox border">
                        <div class="table">
                            <table id="myExpenseTable" class="display compact" style="width:100%">
                                @include('shared.main.mainexpense')
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    Modal--}}
    @include('shared.modals.createexpensesmodal')
@endsection
