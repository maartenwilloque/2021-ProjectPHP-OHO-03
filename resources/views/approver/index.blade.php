@extends('layouts.template')
@section('title','Approvals')
@section('main')
    <div class="row justify-content-center m-auto">
        <div class="col-11 offset-sm-2 offset-md-1">
            <h2 class="display-5 mt-2">Approvals</h2>
            <div class="table-responsive">
                <table id="approvalTable" class="display compact" style="width:75%">
                    <thead>
                    <tr>
                        <th>Omschrijving</th>
                        <th>Indiener</th>
                        <th>Kostenplaats</th>
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
                            <td>{{$expense->costcentre->description}}</td>
                            <td>{{$expense->date}}
                            </td>
                            <td>
                                <form action="expense/{{$expense->id}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <div class="btn-group btn-sm">
                                        <a href="expense/{{ $expense->id }}/edit"
                                           data-toggle="tooltip"
                                           title="Edit {{ $expense->id }}">
                                            <i class="fas fa-thumbs-up btnTableEdit"></i>
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
