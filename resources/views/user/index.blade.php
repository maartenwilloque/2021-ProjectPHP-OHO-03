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
                        <th class="dt-head-center"><i class="fas fa-tasks"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($expenses as $expense)
                        <tr>
                            <td>{{ $expense->name}}</td>
                            <td>{{ $expense->description }}</td>
                            <td>{{ $expense->date }}</td>
                            @if(  $amounts->where('expense_id',$expense->expID)->count() >0 )
                                @foreach($amounts as $amount)
                                    @if($amount->expense_id == $expense->expID)
                                        <td>{{ $amount->total}}</td>
                                        @break
                                    @endif
                                @endforeach
                            @else
                                {{--lege cell als er geen Expense line bestaat--}}
                                <td></td>
                            @endif
                            <td>{{ $expense->CCDescription }}</td>
                            <td>{{ $expense->costcentre }}</td>
                            <td class="dt-center">
                                @switch( $expense->statusID)
                                    @case(1)
                                    {{--                                    Concept--}}
                                    <span class="border-0 bg-transparent" data-toggle="tooltip"
                                          title="{{ $expense->statusName }}">
                                        <i class="fas fa-folder-plus btnTableExpConcept"></i>
                                    </span>
                                    @break
                                    @case(2)
                                    <span class="border-0 bg-transparent" data-toggle="tooltip"
                                          title="{{ $expense->statusName }}">
                                         <i class="fas fa-sign-in-alt btnTableExpIngediend"></i>
                                    </span>
                                    {{--                                    ingediend--}}
                                    @break
                                    @case(3)
                                    {{--                                    Goedgekeurd KP--}}
                                    <span class="border-0 bg-transparent" data-toggle="tooltip"
                                          title="{{ $expense->statusName }}">
                                        <i class="far fa-thumbs-up btnTableExpOk"></i>
                                    </span>
                                    @break
                                    @case(4)
                                    {{--                                    Afgekeurd KP--}}
                                    <span class="border-0 bg-transparent" data-toggle="tooltip"
                                          title="{{ $expense->statusName }}">
                                        <i class="far fa-check-square btnTableExpAfgekeurd"></i>
                                    </span>
                                    @break
                                    @case(5)
                                    {{--                                    Goedgekeurd FIN--}}
                                    <span class="border-0 bg-transparent" data-toggle="tooltip"
                                          title="{{ $expense->statusName }}">
                                      <i class="far fa-hand-paper btnTableExpOk"></i>
                                    </span>
                                    @break
                                    @case(6)
                                    {{--                                    Afgekeurd FIN--}}
                                    <span class="border-0 bg-transparent" data-toggle="tooltip"
                                          title="{{ $expense->statusName }}">
                                         <i class="fas fa-ban btnTableExpAfgekeurd"></i>
                                    </span>
                                    @break
                                    @case(7)
                                    {{--                                    ingediend NA--}}
                                    <span class="border-0 bg-transparent" data-toggle="tooltip"
                                          title="{{ $expense->statusName }}">
                                          <i class="fas fa-hand-holding-usd btnTableExpOk"></i>
                                    </span>
                                    @break
                                    @case(8)
                                    {{--                                    afgerond--}}
                                    <span class="border-0 bg-transparent" data-toggle="tooltip"
                                          title="{{ $expense->statusName }}">
                                        <i class="fas fa-euro-sign btnTableExpOk"></i>
                                    </span>
                                    @break
                                @endswitch
                            </td>
                            <td class="hidden-column">{{ $expense->statusName }}</td>
                            {{--                            <td class="hidden-column">{{ $expense->statusID}}</td>--}}
                            <td class="dt-center>
                                <form action="
                            /user/{{ $expense->id }}" method="post">
                            {{--                                    @method('delete')--}}
                            @csrf
                            <div class="btn-group btn-sm">
                                {{--                                        <a href="/admin/user/{{ $expense->id }}/edit"--}}
                                {{--                                           data-toggle="tooltip"--}}
                                {{--                                           title="Edit {{ $expense->name }}">--}}
                                {{--                                            <i class="fas fa-edit btnTableExpOk"></i>--}}
                                {{--                                        </a>--}}
                                {{--                                        <button type="submit" class="border-0" data-toggle="tooltip"--}}
                                {{--                                                title="Delete {{ $expense->name }}">--}}
                                {{--                                            <i class="fas fa-trash-alt btnTableDelete"></i>--}}
                                {{--                                        </button>--}}
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
                </table>
            </div>
        </div>
    </div>
@endsection
