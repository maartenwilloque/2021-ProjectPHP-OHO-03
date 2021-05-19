@extends('layouts.template')
@section('title','Approvals')
<i class="fas fa-plus-circle mr-2"></i>
@section('main')
    <div class="row container-fluid justify-content-sm-center justify-content-lg-start">
        <div class="offset-1 col-sm-8 col-lg-5">
            <h5 class="display-5 ml-5 mt-3">Parameters<a href="/finance/parameter/create"><i
                        class="fas fa-plus-circle btnTableAdd"></i></a></h5>
            @include('shared.alert')
            <div class="table-responsive small">
                <table id="prmTable" class="display compact" style="width:75%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Type</th>
                        <th>€</th>
                        <th>Van</th>
                        <th>Tot</th>
                        {{--                        <th>Active</th>--}}
                        {{--                        <th>--}}
                        {{--                        </th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($parameters as $parameter)
                        <tr>
                            <td>{{ $parameter->id }}</td>
                            <td> {{ $parameter->type->name}}</td>
                            <td>{{ $parameter->value }}</td>
                            <td>{{ $parameter->from_date }}</td>
                            <td>{{ $parameter->to_date }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="offset-1 col-sm-8 col-lg-5">
            <h5 class="display-5 ml-5 mt-3">Parameter Types</h5>
            <div class="table-responsive small">
                <table id="typeTable" class="display compact" style="width:75%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Naam</th>
                        <th></th>
                    </tr>
                    </thead>
                    <thead>
                    <tbody>
                    @foreach($prmTypes as $prmType)
                        <tr>
                            <td>{{ $prmType->id }}</td>
                            <td> {{ $prmType->name}}</td>
                            <td>
                                <form action="/finance/parameterType/{{ $prmType->id }}" method="post">
                                    {{--                                    @method('delete')--}}
                                    @csrf
                                    <div class="btn-group btn-sm">
                                        <a href="/finance/parameterType/{{ $prmType->id }}/edit"
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
        <div class="offset-1 col-sm-8 col-lg-10">
            <h5 class="display ml-5 mt-3">CostCenters<a href="/finance/costcenter/create"><i
                        class="fas fa-plus-circle btnTableAdd"></i></a></h5>
            <div class="table-responsive small">
                <table id="costcenterTable" class="display compact" style="width:90%">
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
@endsection
