@extends('layouts.template')
@section('title','Approvals')
<i class="fas fa-plus-circle mr-2"></i>
@section('main')
    <div class="row container-fluid justify-content-sm-center justify-content-lg-start">
        <div class="offset-1 col-sm-8 col-lg-5">
            <h5 class="display-5 ml-5 mt-3">Parameters</h5>
            @include('shared.alert')
            <div class="offset-1 col-sm-11 col-lg-11">
                <h5 class="display-5 ml-5 mt-3 font"><br></h5>
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
        <div class="row justify-content-sm-center justify-content-lg-start">
            <div class="col-sm-8 col-lg-12">
                <h5 class="display ml-5 mt-3">CostCenters<a href="/finance/costcenter/create"><i
                            class="fas fa-plus-circle btnTableAdd"></i></a></h5>
                <div class="table-responsive small">
                    <table id="costcenterTable" class="display compact" style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Verantwoordelijke</th>
                            <th>CostCenter</th>
                            <th>Beschrijving</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($costcentres as $costcentre)
                            <tr>
                                <td>{{ $costcentre->id }}</td>
                                <td>{{ $costcentre->user->name }} {{ $costcentre->user->firstname }}</td>
                                <td>{{ $costcentre->costcentre }}</td>
                                <td>{{ $costcentre->description }}</td>
                                <td>
                                    <form action="/finance/costcenter/{{ $costcentre->id }}" method="post">
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
@endsection
