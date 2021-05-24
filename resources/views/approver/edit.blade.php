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
            <button type="button" class="btn btn-danger border-dark rounded-pill border-0 shadow-sm px-4"
                    data-toggle="modal" data-target="#rejectmodal">
                Afkeuren
            </button>
        </div>
    </div>

@endsection
@section('detailmodal')
    <form action="/approver/expense/{{$expense->id }}" method="post">
        <div class="modal fade" id="rejectmodal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Reden voor afkeuren</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <textarea type="text" class="form-control" id="rejectreason" name="rejectreason"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger border-dark rounded-pill border-0 shadow-sm px-4">
                            Afkeuren
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
