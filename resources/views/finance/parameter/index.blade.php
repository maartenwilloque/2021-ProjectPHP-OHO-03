@extends('layouts.template')
@section('title','Approvals')
@section('main')
    <div class="row justify-content-center m-auto">
        <div class="col-10 offset-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3">
                        <h3 class="subheadertitle">Parameters</h3>
                    </div>
                    @if (session()->has('success'))
                        <div class=" col-6 alert alert-success alert-dismissable">{!! session()->get('success') !!}</div>
                    @endif
                    @if (session()->has('danger'))
                        <div class=" col-6 alert alert-danger alert-dismissable">{!! session()->get('danger') !!}</div>
                    @endif
                </div>
                <div class="row justify-content-between">
                    <div class="col-5">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="mt-3">Types</h4>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 detailmainbox border">
                                <div class="table-responsive small">
                                    <table id="typeTable" class="display compact" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Naam</th>
                                            <th>€</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <thead>
                                        <tbody>
                                        @foreach($prmTypes as $prmType)
                                            <tr>
                                                <td>{{ $prmType->id }}</td>
                                                <td> {{ $prmType->name}}</td>
                                                <td> {{ $prmType->value}}</td>
                                                <td>
                                                    <form action="/finance/parameter/{{ $prmType->id }}" method="post">
                                                        {{--                                    @method('delete')--}}
                                                        @csrf
                                                        <div class="btn-group btn-sm">
                                                            <a href="/finance/parameter/{{ $prmType->id }}/edit"
                                                               data-toggle="tooltip"
                                                               title="Edit {{ $prmType->id }}">
                                                                <i class="fas fa-edit btnTableEdit"></i>
                                                            </a>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="mt-3">Costcenters</h4>
                            </div>
                            <div class="col-6 text-right">
                                <i class="far fa-plus-square btn btn-create" data-toggle="modal"
                                   data-target="/finance/costcenter/create"
                                   style="color: orangered !important; font-size: 20px;"
                                ></i>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 detailmainbox border">
                                <div class="table-responsive small">
                                    <table id="costcenterTable" class="display compact" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>CostCenter</th>
                                            <th>Beschrijving</th>
                                            <th>Verantwoordelijke</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($costcentres as $costcentre)
                                            <tr>
                                                <td>{{ $costcentre->id }}</td>
                                                <td>{{ $costcentre->costcentre }}</td>
                                                <td>{{ $costcentre->description }}</td>
                                                <td>{{ $costcentre->user->name }} {{ $costcentre->user->firstname }}</td>
                                                <td>
                                                    <form action="/finance/costcenter/{{ $costcentre->id }}"
                                                          method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <div class="btn-group btn-sm">
                                                            <a href="/finance/costcenter/{{ $costcentre->id }}/edit"
                                                               data-toggle="tooltip"
                                                               title="Edit {{ $costcentre->costcentre }}">
                                                                <i class="fas fa-edit btnTableEdit"></i>
                                                            </a>
                                                            <button type="submit" class="border-0" data-toggle="tooltip"
                                                                    title="Delete {{ $costcentre->costcentre }}">
                                                                <i class="fas fa-trash-alt btnTableDelete"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
