@extends('layouts.template')
@section('title','Users')
@section('main')
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js"></script>
    <div class="row justify-content-center m-auto">
        <div class="col-11 offset-1">
            <form method="get" action="/approver/approval" id="searchForm">
                <div class="row">
                    <div class="col-sm-6 mb-2">
                        <input type="text" class="form-control" name="name" id="name"
                               value="" placeholder="Zoek onkosten">
                    </div>
                    <div class="col-sm-2 mb-2">
                        <button type="submit" class="btn btn-success btn-block">Search</button>
                    </div>
                </div>
            </form>
            {{--        Logo--}}
            {{--            <div class="row justify-content-center pb-5">--}}
            {{--                <img src="/assets/logo/MyExpenseLogo.png" class="mobilelogo d-md-none" alt="My expense Logo">--}}
            {{--            </div>--}}
            {{--            User updaten--}}
            <h5 class="display-5 mt-2">Approvals</h5>
            <div class="table-responsive">
                <table id="approval" class="display" style="width:100%">
                    <thead>
                    <tr>
                        <th class="" onclick="TableSort.sortTable(0,'approval')">Omschrijving<i
                                class="fas fa-sort small"></i></th>
                        <th class="" onclick="TableSort.sortTable(1,'approval')">Naam<i
                                class="fas fa-sort small"></i></th>
                        <th class="" onclick="TableSort.sortTable(2,'approval')">Type<i
                                class="fas fa-sort small"></i></th>
                        <th class="" onclick="TableSort.sortTable(3,'approval')">Bedrag<i
                                class="fas fa-sort small"></i></th>
                        <th class="" onclick="TableSort.sortTable(4,'approval')">Datum<i
                                class="fas fa-sort small"></i></th>
                        <th>Details</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($approvals as $approval)
                        <tr>
                            <td>
                                {{$approval->name}}
                            </td>
                            <td>
                                {{$approval->user->firstname}} {{$approval->user->name}}
                            </td>
                            <td>
                                {{$approval->type->name}}
                            </td>
                            <td>
                                @foreach($approval->amounts as $amount)
                                    €{{$amount->amount}}
                                @endforeach
                            </td>
                            <td>
                                {{$approval->date}}
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                {{ $approvals->links() }}

            </div>
        </div>
    </div>

@endsection
