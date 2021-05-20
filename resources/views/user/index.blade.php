@extends('layouts.template')
@section('title','My expensenses')
@section('main')
    <div class="row justify-content-center m-auto">
        <div class="col-11 offset-1">
            <h5 class="display-5 mt-2">My expenses</h5>
            <div class="table">
                <table id="myExpenseTable" class="display" style="width:75%">
                    <thead>
                    <tr>
                        <th>Type</th>
                        <th>Titel</th>
                        <th>Omschrijving</th>
{{--                        <th>CostCenter</th>--}}
                        <th>CostCenter</th>
                        <th>Ingediend</th>
                        <th>StatusIcoon</th>
                        <th class="hidden-column">StatusID</th>
                        <th>Beheer</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($expenses as $expense)
                        <tr>
                            <td>{{ $expense->typeName }}</td>
                            <td>{{ $expense->name }}</td>
                            <td>{{ $expense->description }}</td>
{{--                            <td>{{ $expense->costcentre }}</td>--}}
                            <td>{{ $expense->costcentresBeschrijving }}</td>
                            <td>{{ $expense->date }}</td>
                            <td>
{{--                                {{ $expense->statusID }}--}}
                            </td>
                            <td class="hidden-column">{{ $expense->statusID}}</td>
                            <td>
                                                                <form action="/user/{{ $expense->id }}" method="post">
                                                                    @method('delete')
                                                                    @csrf
                                                                    <div class="btn-group btn-sm">
                                                                        <a href="/admin/user/{{ $expense->id }}/edit"
                                                                           data-toggle="tooltip"
                                                                           title="Edit {{ $expense->name }}">
                                                                            <i class="fas fa-edit btnTableEdit"></i>
                                                                        </a>
                                                                        <button type="submit" class="border-0" data-toggle="tooltip"
                                                                                title="Delete {{ $expense->name }}">
                                                                            <i class="fas fa-trash-alt btnTableDelete"></i>
                                                                        </button>
                                                                        <button type="submit" class="border-0" data-toggle="tooltip"
                                                                                title="Detail {{ $expense->name }}">
                                                                            <i class="far fa-eye btnTableView"></i>
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
