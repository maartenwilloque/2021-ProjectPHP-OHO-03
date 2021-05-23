@extends('layouts.template')
@section('title','Approvals')
@section('main')
    <div class="row justify-content-center m-auto">
        <div class="col-11 offset-1">
            <h2 class="display-5 mt-2">Approvals</h2>
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
@endsection
