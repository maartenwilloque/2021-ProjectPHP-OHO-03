@extends('layouts.template')
@section('title','My Expense Home')
@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Team Project</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <ul>
                            <p class="alert-info"> <i class="fas fa-users"></i>  OHO 2020-2021 PHP project Team 3</p>
                            <li>Alex Swaan</li>
                            <li>Maarten Willoqué</li>
                            <li>Erwin VAn Moorleghem</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
