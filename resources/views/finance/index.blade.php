@extends('layouts.template')
@section('title','Approvals')
@section('main')
    <div class="row justify-content-center m-auto">
        <div class="col-10 offset-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h3 class="subheadertitle">Overzicht</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h4 class="mt-2">Mijn Betalingen</h4>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 detailmainbox border">
                        <div class="table-responsive">
                            <table id="financeTable" class="display compact" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Titel</th>
                                    <th>Omschrijving</th>
                                    <th>Indiener</th>
                                    <th>Datum</th>
                                    <th class="dt-head-center">€</th>
                                    <th>CostCenter</th>
                                    <th>CC-Code</th>
                                    <th class="dt-head-center"><i class="fas fa-tasks"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($expenses as $expense)
                                    <tr>
                                        <td> {{$expense->name}}</td>
                                        <td> {{$expense->description}}</td>
                                        <td>{{$expense->user->firstname}} {{$expense->user->name}}</td>
                                        <td>{{$expense->date}}
                                        <td>€ {{$expense->expenselines->where('date','<',now())->sum('amount')}}</td>

                                        <td>{{$expense->costcentre->description}}</td>
                                        <td>{{$expense->costcentre->costcentre}}</td>
                                        <td class="dt-center">
                                            <form action="expense/{{$expense->id}}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <div class="btn-group btn-sm">
                                                    <a href="expense/{{ $expense->id }}/edit"
                                                       data-toggle="tooltip"
                                                       title="Edit {{ $expense->id }}">
                                                        <i class="far fa-eye btnTableView"></i>
                                                    </a>
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
                                    <th>Indiener</th>
                                    <th></th>
                                    <th class="dt-head-center"></th>
                                    <th>CostCenter</th>
                                    <th>CC-Code</th>
                                    <th class="dt-head-center"></th>
                                </tr>
                                </tfoot>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
