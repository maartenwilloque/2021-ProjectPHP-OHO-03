@extends('layouts.template')
@section('title','Gebruikers')
@section('main')
    <div class="row justify-content-center m-auto">
        <div class="col-10 offset-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h3 class="display-4 mt-2">Admin</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <h4 class="mt-3">Gebruikers</h4>
                    </div>
                    <div class="col-6 text-right">
                        <i class="far fa-plus-square btn btn-create" data-toggle="modal"
                           data-target="#createExpensemodal" style="color: orangered !important; font-size: 20px;"
                        ></i>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 detailmainbox border">
                        <div class="table-responsive">
                            <table id="userTable" class="display compact" style="width:100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Naam</th>
                                    <th>Voornaam</th>
                                    <th>Email</th>
                                    <th class="dt-center">Active</th>
                                    <th class="dt-center">Approver</th>
                                    <th class="dt-center">Finance</th>
                                    <th class="dt-center">Admin</th>
                                    <th>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->firstname }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td class="dt-center">{{ $user->active }}</td>
                                        <td class="dt-center">{{ $user->approver }}</td>
                                        <td class="dt-center">{{ $user->finance}}</td>
                                        <td class="dt-center">{{ $user->admin }}</td>
                                        <td class="dt-center">
                                            <form action="/admin/user/{{ $user->id }}" method="post">
                                                {{--                                    @method('delete')--}}
                                                @csrf
                                                <div class="btn-group btn-group">
                                                    <a href="/admin/user/{{ $user->id }}/edit"
                                                       data-toggle="tooltip"
                                                       title="Edit {{ $user->name }}">
                                                        <i class="fas fa-edit btnTableEdit"></i>
                                                    </a>
                                                    {{--                                                                                            <button type="submit" class="btn btn-danger"--}}
                                                    {{--                                                                                                    data-toggle="tooltip"--}}
                                                    {{--                                                                                                    title="Delete {{ $user->name }}">--}}
                                                    {{--                                                                                                <i class="fas fa-trash-alt"></i>--}}
                                                    {{--                                                                                            </button>--}}
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
            </div>
        </div>
    </div>
@endsection
