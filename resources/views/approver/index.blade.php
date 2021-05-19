@extends('layouts.template')
@section('title','Approvals')
@section('main')
    <div class="row justify-content-center m-auto">
        <div class="col-11 offset-sm-2 offset-md-1">
            <h5 class="display-5 mt-2">Approvals</h5>
            <div class="table-responsive">
                <table id="approvalTable" class="display compact" style="width:75%">
                    <thead>
                    <tr>
                        <th>Omschrijving</th>
                        <th>User</th>
                        <th>Type</th>
                        <th>Bedrag</th>
                        <th>Datum</th>
                        <th>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($expenses as $expense)
                        <tr>
                            <td> {{$expense->name}}</td>
                            <td>{{$expense->user->firstname}} {{$expense->user->name}}</td>
                            <td> {{$expense->type->name}}</td>
                            <td>
                                @switch($expense->type->id)

                                    @case(2)
                                    @foreach($expense->amounts as $amounts)
                                        €{{$amounts->amount/4}}
                                    @endforeach
                                    @break
                                    @case(1)
                                    @case(5)
                                    @foreach($expense->amounts as $amounts)
                                        €{{$amounts->amount}}
                                    @endforeach
                                    @break
                                    @case(3)
                                    @case(4)
                                    @foreach($expense->type->parameterType as $type)
                                        @foreach($expense->transfers as $transfers)
                                            €{{$transfers->distance * $type->value}}
                                        @endforeach
                                    @endforeach
                                    @break
                                @endswitch
                            </td>
                            <td>
                                @foreach($expense->transfers as $transfers)
                                    {{$transfers->date}}
                                @endforeach
                                @foreach($expense->amounts as $amounts)
                                    {{$amounts->date}}
                                @endforeach</td>
                            <td>
                                <form action="expense/{{ $expense->id }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <div class="btn-group btn-group">
                                        <a href="expense/{{ $expense->id }}/edit"
                                           class="btn btn-outline-success"
                                           data-toggle="tooltip"
                                           title="Edit {{ $expense->id }}">
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
