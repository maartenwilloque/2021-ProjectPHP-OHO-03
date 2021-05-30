@extends('layouts.template')
@section('title','My expensenses')
@section('main')
    <div class="row justify-content-center m-auto">
        <div class="col-11 offset-1">
            <h2 class="display-5 mt-2">Overzicht</h2>
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
                            <td>€ {{$expense->expenselines->where('date','<',now())->sum('amount')}}</td>
                            <td>{{$expense->costcentre->description}}</td>
                            <td>{{$expense->costcentre->costcentre}}</td>

                            @foreach($expense->expenseprogress as $expenseprogress)
                                <td class="hidden-column">{{ $expenseprogress->status->name}}</td>
                                <td class="dt-center">
                                    <span class="border-0 bg-transparent" data-toggle="tooltip"
                                          title="{{ $expenseprogress->status->name }}">
                                                                        <i class="{{$expenseprogress->status->icon}}"
                                                                           style="color: {{$expenseprogress->status->color}}!important;"></i>
                                                                    </span>
                                </td>

                                <td class="hidden-column">{{ $expenseprogress->status->id}}</td>
                            @endforeach


                            <td class="dt-center">
                                <form action="expense/{{ $expense->id }}/edit"
                                      action="expense/qryexpenselines/{{ $expense->id }}" method="POST">
                                    @method('get')
                                    @csrf
                                    <div class="btn-group btn-sm">
                                        <button type="submit" class="border-0 bg-transparent" data-toggle="tooltip"
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
@endsection
