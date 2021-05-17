@extends('layouts.template')
@section('title','Approvals')
@section('main')
    <div class="row justify-content-center m-auto">
        <div class="col-5 offset-1">
            <h5 class="display-5 mt-2">Parameters <a href="/finance/parameter/create"
                                                     class="btn btn-outline-success float-right mr-5">
                    <i class="fas fa-plus-circle mr-1"></i>Parameter toevoegen</a></h5>


            <div class="table-responsive">
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
{{--                                                        <td>{{ $parameter->active }}</td>--}}
{{--                            <td>--}}
{{--                                <form action="/finance/parameter/{{ $parameter->id }}" method="post">--}}

{{--                                    @method('delete')--}}
{{--                                    @csrf--}}
{{--                                    <div class="btn-group btn-group">--}}
{{--                                        <a href="/finance/parameter/{{ $parameter->id }}/edit"--}}
{{--                                           class="btn btn-outline-success"--}}
{{--                                           data-toggle="tooltip"--}}
{{--                                           title="Edit {{ $parameter->id }}">--}}
{{--                                            <i class="fas fa-edit"></i>--}}
{{--                                        </a>--}}
{{--                                        <button type="submit" class="btn btn-danger"--}}
{{--                                                data-toggle="tooltip"--}}
{{--                                                title="Delete {{ $user->name }}">--}}
{{--                                            <i class="fas fa-trash-alt"></i>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        <div class="col-5">
            <h5 class="display-5 mt-2">Parameter Types</h5>
            <div class="table-responsive">
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
                                    <div class="btn-group btn-group">
                                        <a href="/finance/parameterType/{{ $prmType->id }}/edit"
                                           class="btn btn-outline-success"
                                           data-toggle="tooltip"
                                           title="Edit {{ $prmType->id }}">
                                            <i class="fas fa-edit"></i>
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
@endsection
