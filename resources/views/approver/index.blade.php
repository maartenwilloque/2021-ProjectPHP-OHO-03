@extends('layouts.template')
@section('title','Users')
@section('main')
    <div class="row justify-content-center m-auto">
        <div class="col-11 offset-1">
            <h5 class="display-5 mt-2">Approvals</h5>
            <div class="table-responsive">
                <table id="approvalTable" class="display" style="width:100%">
                    <thead>
                    <tr>
                        <th>Omschrijving</th>
                        <th>User</th>
                        <th>Type</th>
                        <th>Bedrag</th>
                        <th>Datum</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($approvals as $approval)
                        <tr>
                            <td> {{$approval->name}}</td>
                            <td>{{$approval->user->firstname}} {{$approval->user->name}}</td>
                            <td> {{$approval->type->name}}</td>
                            <td>@foreach($approval->amounts as $amounts)
                                    €{{$amounts->amount}}
                                @endforeach</td>
                            <td> {{$approval->date}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
