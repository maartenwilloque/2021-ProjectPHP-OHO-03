@extends('shared.details.details')
@section('detailmain')
@include('shared.details.detailexpense')
@endsection
@section('detailexpenses')
    @include('shared.details.detailtable')
@endsection
@section('detailsubmit')
    <div class="row">
        <div class="col-6 text-center">
            <form action="/approver/expense/{{$expense->id }}" method="post">
                @method('put')
                @csrf
                <button type="submit" class="btn btn-success border-dark rounded-pill border-0 shadow-sm px-4 submitbtn">
                    Goedkeuren
                </button>
            </form>
        </div>
        <div class="col-6 text-center">
            <button type="button" class="btn btn-danger border-dark rounded-pill border-0 shadow-sm px-4 submitbtn"
                    data-toggle="modal" data-target="#rejectmodal">
                Afkeuren
            </button>
        </div>
    </div>

@endsection
@section('detailmodal')
    <form action="/approver/expense/{{$expense->id }}" method="post">
      @include('shared.modals.rejectmodal')
    </form>
@endsection
