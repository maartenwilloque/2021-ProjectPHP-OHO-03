@extends('shared.details.details')
@section('detailmain')
    <div class="row">
        <div class="col-2"><h5>Titel:</h5>
        </div>
        <div class="col-4"><p>{{$expense->name}}</p>
        </div>
        <div class="col2 offset-4"><p class="pl-5">{{$expense->date}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-2"><h5>Eigenaar:</h5>
        </div>
        <div class="col-4">
            <p>{{$expense->user->firstname}} {{$expense->user->name}}</p>
        </div>
        <div class="col-2"><h5>Kostenplaats:</h5>
        </div>
        <div class="col-4">
            <p>{{$expense->costcentre->description}} ({{$expense->costcentre->costcentre}})</p>
        </div>
    </div>
    <div class="row">
        <div class="col-6"><h5>Omschrijving:</h5>
            <div class="row">
                <div class="col-12">
                    <p>{{$expense->description}}</p>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-4"><h5>Totaal:</h5>
                </div>
                <div class="col-8"><p>€ {{$expense->expenselines->sum('amount')}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('detailexpenses')
    <table id="detailTable">
        <thead>
        <tr>
            <th>Omschrijving</th>
            <th>Datum</th>
            <th>Bedrag</th>
            <th>Bijlage</th>
        </tr>
        </thead>
        <tbody>
        @foreach($expense->expenselines as $expenselines)
            <tr>
                <td>{{$expenselines->description}}</td>
                <td>{{$expenselines->date}}</td>
                <td>€{{$expenselines->amount}}</td>
                <td><a href="{{$expenselines->attachmment}}"><i class="fas fa-file-download"></i></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
@section('detailsubmit')
    <div class="row">
        <div class="col-6 text-center">
            <form action="/approver/expense/{{$expense->id }}" method="post">
                @method('put')
                @csrf
                <button type="submit" class="btn btn-success border-dark rounded-pill border-0 shadow-sm px-4">
                    Goedkeuren
                </button>
            </form>
        </div>
        <div class="col-6 text-center">
            <form action="/approver/expense/{{$expense->id }}" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger border-dark rounded-pill border-0 shadow-sm px-4">
                    Afkeuren
                </button>
            </form>
        </div>
    </div>
@endsection
