@extends('layouts.template')
@section('title','Parameters')
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
            <h5 class="display-5 mt-2">Parameters</h5>
            <div class="table col-11" >
                <table class="table"id="prmTable">
                    <thead>
                    <tr>
                        <th class="small" onclick="TableSort.sortTable(0,'prmTable')">#<i class="fas fa-sort small"></i></th>
                        <th class="small" onclick="TableSort.sortTable(2,'prmTable')">Type<i class="fas fa-sort small"></i></th>
                        <th class="small" onclick="TableSort.sortTable(1,'prmTable')">€<i class="fas fa-sort small"></i></th>
                        <th class="small" onclick="TableSort.sortTable(3,'prmTable')">Van<i class="fas fa-sort small"></i></th>
                        <th class="small" onclick="TableSort.sortTable(4,'prmTable')">Tot<i class="fas fa-sort small"></i></th>
                        <th class="small">Update</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($parametersTypes as $parametersType)
                        <tr>
                            <td class="small">{{ $parametersType->id }}</td>
                            <td class="small"> {{ $parametersType->type->name}}</td>
                            <td class="small">{{ $parametersType->value }}</td>
                            <td class="small">{{ $parametersType->from_date }}</td>
                            <td class="small">{{ $parametersType->to_date }}</td>
                            <td>
                                <form action="/finance/parameter/{{ $parametersType->id }}" method="post">
                                    {{--                                    @method('delete')--}}
                                    @csrf
                                    <div class="btn-group btn-group">
                                        <a href="/finance/parameter/{{ $parametersType->id }}/edit"
                                           class="btn btn-outline-success"
                                           data-toggle="tooltip"
                                           title="Edit {{ $parametersType->id }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        {{--                                <button type="submit" class="btn btn-danger"--}}
                                        {{--                                        data-toggle="tooltip"--}}
                                        {{--                                        title="Delete {{ $user->name }}">--}}
                                        {{--                                    <i class="fas fa-trash-alt"></i>--}}
                                        {{--                                </button>--}}
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{--        <div class="col-1"></div>--}}
        {{--        marge--}}
        <div class="col-5">
            <h5 class="display-5 mt-2">Types</h5>
            <div class="table col-11">
                <table class="table" id="typeTable">
                    <thead>
                    <tr>
                        <th class="small" onclick="TableSort.sortTable(0,'typeTable')">#<i class="fas fa-sort small"></i></th>
                        <th class="small" onclick="TableSort.sortTable(1,'typeTable')">Name<i class="fas fa-sort small"></i></th>
                        <th class="small">Update</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($prmTypes as $prmType)
                        <tr>
                            <td class="small">{{ $prmType->id }}</td>
                            <td class="small">{{ $prmType->name }}</td>
                            <td>
                                <form action="/finance/parameter/{{ $prmType->id }}" method="post">
                                    {{--                                    @method('delete')--}}
                                    @csrf
                                    <div class="btn-group btn-group">
                                        <a href="/finance/parameter/{{ $prmType->id }}/edit"
                                           class="btn btn-outline-success"
                                           data-toggle="tooltip"
                                           title="Edit {{ $prmType->id }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        {{--                                <button type="submit" class="btn btn-danger"--}}
                                        {{--                                        data-toggle="tooltip"--}}
                                        {{--                                        title="Delete {{ $user->name }}">--}}
                                        {{--                                    <i class="fas fa-trash-alt"></i>--}}
                                        {{--                                </button>--}}
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
