@extends('layouts.template')
@section('title','My expensenses')
@section('main')
    <div class="row justify-content-center m-auto">
        <div class="col-10 offset-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h3 class="display-4 mt-2">Overzicht</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <h4 class="mt-3">Mijn Onkosten</h4>
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
                                <thead>
                                <tr>
                                    <th>Titel</th>
                                    <th>Omschrijving</th>
                                    <th>Datum</th>
                                    <th class="dt-head-center">€</th>
                                    <th>CostCenter</th>
                                    <th>CC-Code</th>
                                    <th class="dt-head-center"><i class="fas fa-wallet"></i></th>
                                    <th class="hidden-column">StatusOmschrijving</th>
                                    <th class="hidden-column"></th>
                                    <th class="dt-head-center"><i class="fas fa-tasks"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($expenses as $expense)
                                    <tr>
                                        <td>{{ $expense->name}}</td>
                                        <td>{{ $expense->description }}</td>
                                        <td>{{ $expense->date }}</td>
                                        <td class="dt-head-center">€ {{$expense->expenselines->sum('amount')}}</td>
                                        <td>{{$expense->costcentre->description}}</td>
                                        <td>{{$expense->costcentre->costcentre}}</td>

                                        @foreach($expense->expenseprogress->where('active',1) as $expenseprogress)
                                            <td class="hidden-column">{{ $expenseprogress->status->name}}</td>
                                            <td class="dt-center">
                                                                                <span class="border-0 bg-transparent"
                                                                                      data-toggle="tooltip"
                                                                                      title="{{ $expenseprogress->status->name }}">
                                                                                                                    <i class="{{$expenseprogress->status->icon}}"
                                                                                                                       style="color: {{$expenseprogress->status->color}}!important;"></i>
                                                                                                                </span>
                                            </td>

                                            <td class="hidden-column">{{ $expenseprogress->status->id}}</td>
                                        @endforeach


                                        <td class="dt-center">
                                            <form action="expense/{{ $expense->id }}/edit" method="POST">
                                                @method('get')
                                                @csrf
                                                <div class="btn-group btn-sm">
                                                    <button type="submit" class="border-0 bg-transparent"
                                                            data-toggle="tooltip"
                                                            title="Detail {{ $expense->name }}">
                                                        <i class="far fa-eye btnTableView"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th class="dt-head-center"></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </tfoot>
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
