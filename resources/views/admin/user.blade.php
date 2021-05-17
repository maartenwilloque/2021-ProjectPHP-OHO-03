@extends('layouts.template')
@section('title','Approvals')
@section('main')
    <div class="row justify-content-center m-auto">
        <div class="col-11 offset-1">
            <h5 class="display-5 mt-2">Approvals</h5>
            <div class="table-responsive">
                <table id="userTable" class="display compact" style="width:75%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Naam</th>
                        <th>Voornaam</th>
                        <th>Email</th>
                        <th>Active</th>
                        <th>Approver</th>
                        <th>Finance</th>
                        <th>Admin</th>
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
                            <td>{{ $user->active }}</td>
                            <td>{{ $user->approver }}</td>
                            <td>{{ $user->finance}}</td>
                            <td>{{ $user->admin }}</td>
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
