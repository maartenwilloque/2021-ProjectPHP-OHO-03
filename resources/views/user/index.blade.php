@extends('layouts.template')
@section('title','Users')
@section('main')
    <div class="row justify-content-center m-auto">
        {{--        marge--}}
        <div class="col-1"></div>
        {{--        marge--}}
        {{--        user--}}
        <div class="col-11">
            {{--        Logo--}}
            {{--            <div class="row justify-content-center pb-5">--}}
            {{--                <img src="/assets/logo/MyExpenseLogo.png" class="mobilelogo d-md-none" alt="My expense Logo">--}}
            {{--            </div>--}}
            {{--            User updaten--}}
            <h5 class="display-5 mt-2">My Expenses</h5>
            <div class="btn-toolbar justify-content-between float mr-5" role="toolbar"
                 aria-label="Toolbar with button groups">
                <div class="btn-group" role="group" aria-label="First group">
                    <button type="button" class="btn bg-transparent"><i class="fas fa-plus"></i> Fietsdag</button>
                    <button type="button" class="btn bg-transparent"><i class="fas fa-plus"></i> Onkost</button>
                    <button type="button" class="btn bg-transparent"><i class="fas fa-plus"></i> Laptop</button>
                </div>
            </div>
            <div class="table col-11 ">
                <table class="table" id="myExpenseTable">
                    <thead>
                    <tr>
                        <th class="small" onclick="TableSort.sortTable(0,'myExpenseTable')">#<i
                                class="fas fa-sort small"></i></th>
                        <th class="small" onclick="TableSort.sortTable(1,'myExpenseTable')">Naam<i
                                class="fas fa-sort small"></i></th>
                        <th class="small" onclick="TableSort.sortTable(2,'myExpenseTable')">Voornaam<i
                                class="fas fa-sort small"></i></th>
                        <th class="small" onclick="TableSort.sortTable(3,'myExpenseTable')">Active<i
                                class="fas fa-sort small"></i></th>
                        <th class="small" onclick="TableSort.sortTable(4,'myExpenseTable')">Approver<i
                                class="fas fa-sort small"></i></th>
                        <th class="small" onclick="TableSort.sortTable(5,'myExpenseTable')">Finance<i
                                class="fas fa-sort small"></i></th>
                        <th class="small" onclick="TableSort.sortTable(6,'myExpenseTable')">Admin<i
                                class="fas fa-sort small"></i></th>
                        <th class="small">Update</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{--                    @foreach($users as $user)--}}
                    <tr>
                        {{--                            <th class="small" onclick="TableSort.sortTable(0,'myExpenseTable')">#<i class="fas fa-sort small"></i></th>--}}
                        {{--                            <th class="small" onclick="TableSort.sortTable(1,'myExpenseTable')">Naam<i class="fas fa-sort small"></i></th>--}}
                        {{--                            <th class="small" onclick="TableSort.sortTable(2,'myExpenseTable')">Voornaam<i class="fas fa-sort small"></i></th>--}}
                        {{--                            <th class="small" onclick="TableSort.sortTable(3,'myExpenseTable')">Active<i class="fas fa-sort small"></i></th>--}}
                        {{--                            <th class="small" onclick="TableSort.sortTable(4,'myExpenseTable')">Approver<i class="fas fa-sort small"></i></th>--}}
                        {{--                            <th class="small" onclick="TableSort.sortTable(5,'myExpenseTable')">Finance<i class="fas fa-sort small"></i></th>--}}
                        {{--                            <th class="small" onclick="TableSort.sortTable(6,'myExpenseTable')">Admin<i class="fas fa-sort small"></i></th>--}}
                        {{--                            <td>--}}
                        {{--                                <form action="/admin/user/{{ $user->id }}" method="post">--}}
                        {{--                                    @method('delete')--}}
                        {{--                                    @csrf--}}
                        {{--                                    <div class="btn-group btn-group">--}}
                        {{--                                        <a href="/admin/user/{{ $user->id }}/edit" class="btn btn-outline-success"--}}
                        {{--                                           data-toggle="tooltip"--}}
                        {{--                                           title="Edit {{ $user->name }}">--}}
                        {{--                                            <i class="fas fa-edit"></i>--}}
                        {{--                                        </a>--}}
                        {{--                                        --}}{{--                                <button type="submit" class="btn btn-danger"--}}
                        {{--                                        --}}{{--                                        data-toggle="tooltip"--}}
                        {{--                                        --}}{{--                                        title="Delete {{ $user->name }}">--}}
                        {{--                                        --}}{{--                                    <i class="fas fa-trash-alt"></i>--}}
                        {{--                                        --}}{{--                                </button>--}}
                        {{--                                    </div>--}}
                        {{--                                </form>--}}
                        </td>
                    </tr>
                    {{--                    @endforeach--}}
                    </tbody>
                </table>
                {{--                <div class="col-md-1"></div>--}}
                {{--        marge--}}

            </div>
        </div>
    </div>
@endsection
