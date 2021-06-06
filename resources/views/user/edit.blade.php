@extends('shared.details.details')
@section('detailmain')
    @include('shared.details.detailexpense')
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
                        class="btn btn-success border-dark rounded-pill border-0 shadow-sm px-4 submitbtn"
                        style="width: 200px !important;">
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
                        class="btn btn-danger border-dark rounded-pill border-0 shadow-sm px-4 statusedit submitbtn"
                        style="width: 200px !important;">
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
