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
            <h5 class="display-5 mt-2">Users</h5>
            <div class="table col-11 ">
                <table class="table" id="userTable">
                    <thead>
                    <tr>
                        <th class="small" onclick="TableSort.sortTable(0,'userTable')">#<i class="fas fa-sort small"></i></th>
                        <th class="small" onclick="TableSort.sortTable(1,'userTable')">Naam<i class="fas fa-sort small"></i></th>
                        <th class="small" onclick="TableSort.sortTable(2,'userTable')">Voornaam<i class="fas fa-sort small"></i></th>
                        <th class="small" onclick="TableSort.sortTable(3,'userTable')">Active<i class="fas fa-sort small"></i></th>
                        <th class="small" onclick="TableSort.sortTable(4,'userTable')">Approver<i class="fas fa-sort small"></i></th>
                        <th class="small" onclick="TableSort.sortTable(5,'userTable')">Finance<i class="fas fa-sort small"></i></th>
                        <th class="small" onclick="TableSort.sortTable(6,'userTable')">Admin<i class="fas fa-sort small"></i></th>
                        <th class="small">Update</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td class="small">{{ $user->id }}</td>
                            <td class="small">{{ $user->name }}</td>
                            <td class="small">{{ $user->firstname }}</td>
                            <td class="small">{{ $user->active }}</td>
                            <td class="small">{{ $user->approver }}</td>
                            <td class="small">{{ $user->finance}}</td>
                            <td class="small">{{ $user->admin }}</td>
                            <td>
                                <form action="/admin/user/{{ $user->id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <div class="btn-group btn-group">
                                        <a href="/admin/user/{{ $user->id }}/edit" class="btn btn-outline-success"
                                           data-toggle="tooltip"
                                           title="Edit {{ $user->name }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        {{--                                <button type="submit" class="btn btn-danger"--}}
                                        {{--                                        data-toggle="tooltip"--}}
                                        {{--                                        title="Delete {{ $user->name }}">--}}
                                        {{--                                    <i class="fas fa-trash-alt"></i>--}}
                                        {{--                                </button>--}}
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
{{--                <div class="col-md-1"></div>--}}
                {{--        marge--}}
            </div>
        </div>
    </div>
@endsection
