@extends('layouts.template')
@section('title','Approvals')
@section('main')
    <div class="row justify-content-center m-auto">
        <div class="col-11 offset-1">
            <h2 class="display-5 mt-2">Faq management</h2>
            <div class="table-responsive">
                <p>
                    <a href="/admin/faq/create" class="btn btn-outline-success">
                        <i class="fas fa-plus-circle mr-1"></i>Maak nieuwe Faq aan</a>
                </p>
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
                    @foreach($faqs as $faq)
                        <tr>
                            <td>{{ $faq->id }}</td>
                            <td>{{ $faq->name }}</td>
                            <td>{{ $faq->firstname }}</td>
                            <td>{{ $faq->email }}</td>
                            <td class="dt-center">{{ $faq->active }}</td>
                            <td class="dt-center">{{ $faq->approver }}</td>
                            <td class="dt-center">{{ $faq->finance}}</td>
                            <td class="dt-center">{{ $faq->admin }}</td>
                            <td class="dt-center">
                                <form action="/admin/user/{{ $faq->id }}" method="post">
                                    {{--                                    @method('delete')--}}
                                    @csrf
                                    <div class="btn-group btn-group">
                                        <a href="/admin/user/{{ $faq->id }}/edit"
                                           data-toggle="tooltip"
                                           title="Edit {{ $faq->name }}">
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
