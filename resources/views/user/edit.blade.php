@extends('shared.details.details')
@section('detailmain')
    <div class="row">
        <div class="col-2"><h5>Titel:</h5>
        </div>
        <div class="col-4"><p>{{$expense->name}}</p>
        </div>
        <div class="col-2"><h5>Status:</h5>
        </div>
        @foreach($expense->expenseprogress->where('active',true) as $expenseprogress)
            <div class="col-2"><p>
                    {{$expenseprogress->status->name}} <span>@if($expenseprogress->status->id != 4 and $expenseprogress->status->id != 6)
                            <i class="fas fa-info-circle d-none" ></i>
                        @else
                            <i class="fas fa-info-circle" data-toggle="tooltip" title="{{$expenseprogress->note}}"></i>
                        @endif</span>
                </p>
                <p class="d-none" id="status">{{$expenseprogress->status->id}}</p>
            </div>
        @endforeach
        <div class="col2 text-right"><p class="pl-5">{{$expense->date}}</p>
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
@include('shared.details.detailtable')
@endsection
@section('detailsubmit')
    <div class="row statusedit">
        <div class="col-6 text-center">
            <form action="{{ route('submitexpense') }}" method="post">
                @csrf
                <label for="id" class="d-none">id</label>
                <input type="text" name="id" id="id"
                       class="d-none"
                       placeholder="id"
                       value="{{$expense->id}}">
                <button type="submit"
                        class="btn btn-success border-dark rounded-pill border-0 shadow-sm px-4 submitbtn" style="width: 200px !important;">
                    Indienen
                </button>
            </form>
        </div>
        <div class="col-6 text-center">
            <form action="/user/expense/{{$expense->id }}" method="post">
                @method('delete')
                @csrf
                <input type="text" name="id" id="id"
                          class="d-none"
                          placeholder="id"
                          value="{{$expense->id}}">
                <button type="submit"
                        class="btn btn-danger border-dark rounded-pill border-0 shadow-sm px-4 statusedit submitbtn" style="width: 200px !important;">
                    Verwijderen
                </button>
            </form>
        </div>
    </div>

@endsection
@section('detailmodal')
    {{--    Update Expense modal--}}
    @include('shared.modals.editexpensesmodal')
    {{--    Update Expenselines modal--}}
   @include('shared.modals.editexpenslinesmodal')
    {{--    Create Expenselines modal--}}
    @include('shared.modals.createexpenselinesmodal')
    {{--    Delete Expenselines modal--}}
    @include('shared.modals.delexpenselinesmodal')
@endsection
