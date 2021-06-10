@extends('layouts.template')
@section('title','Q & A')
@section('main')
    <div class="row justify-content-center m-auto">
        <div class="col-10 offset-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h3 class="subheadertitle">Q & A</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <h4 class="mt-2">Faq</h4>
                    </div>
                    <div class="col-6 text-right">
                        <i class="far fa-plus-square btn btn-create" data-toggle="modal"
                           data-target="#createFaqModal" style="color: orangered !important; font-size: 20px;"
                        ></i>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 detailmainbox border">
                        <div class="table">
                            <table id="myFaqTable" class="display compact" style="width:100%">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>UserRol</th>
                                    <th>Vraag</th>
                                    <th>Antwoord</th>
                                    <th><i class="fas fa-tasks"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($faqs as $faq)
                                    <tr>
                                        <td>{{$faq->id}}</td>
                                        <td>{{ $faq->userRol }}</td>
                                        <td>{{$faq->vraag}}</td>
                                        <td>{{$faq->antwoord}}</td>
                                        <td>
                                            <form action="/admin/faq/{{ $faq->id }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <div class="btn btn-sm">
                                                    <a href="/admin/faq/{{ $faq->id }}/edit" class="btn"
                                                       data-toggle="tooltip"
                                                       title="Edit {{ $faq->name }}">
                                                        <i class="far fa-eye btnTableView"></i>
                                                    </a>
                                                    <button type="submit" class="btn btn-sm"
                                                            data-toggle="tooltip"
                                                            title="Delete {{ $faq->name }}">
                                                        <i class="fas fa-trash-alt btnTableDelete"></i>
                                                    </button>
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
    {{--    Modal--}}
    @include('shared.modals.createFaqModal')
    @include('shared.modals.editFaqModal')
@endsection
