@extends('shared.details.details')
@section('detailmain')
    @include('shared.details.detailexpense')
@endsection
@section('detailexpenses')
    @include('shared.details.detailtable')
@endsection
@section('detailsubmit')
    @foreach($expense->expenseprogress->where('active',true) as $expenseprogress)
    @if($expenseprogress->status->id !== 8 && $expense->expenselines->where('active','=',true)->where('date', '<=', now()))
    <div class="row">
        <div class="col-6 text-center">
            <form action="/finance/expense/{{$expense->id }}" method="post">
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
    @endif
    @endforeach

@endsection
@section('detailmodal')
    <form action="/finance/expense/{{$expense->id }}" method="post">
       @include('shared.modals.rejectmodal')
    </form>
@endsection

