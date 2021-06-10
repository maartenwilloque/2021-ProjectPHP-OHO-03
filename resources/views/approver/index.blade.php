@extends('layouts.template')
@section('title','Goedkeuringen')
@section('main')

    <div class="row justify-content-center m-auto">
        <div class="col-10 offset-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3">
                        <h3 class="subheadertitle">Overzicht</h3>
                    </div>
                    @if (session()->has('success'))
                        <div class=" col-6 alert alert-success alert-dismissable">{!! session()->get('success') !!}</div>
                    @endif
                    @if (session()->has('danger'))
                        <div class=" col-6 alert alert-danger alert-dismissable">{!! session()->get('danger') !!}</div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-12">
                        <h4 class="mt-2">Mijn Goedkeuringen</h4>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 detailmainbox border">
                        <div class="table-responsive">
                            <table id="approvalTable" class="display compact" style="width:100%">
                                @include('shared.main.mainexpense')
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
