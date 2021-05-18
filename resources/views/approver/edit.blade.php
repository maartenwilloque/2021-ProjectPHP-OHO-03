@extends('layouts.template')
@section('title','Update parameter')
@section('main')
    <div class="row justify-content-center m-auto">
        <div class="col-11 offset-1">
            <div class="container">
                <div class="row">
                    <h3 class="display-4 mb-5">Details</h3>
                </div>
                <div class="row">
                    <form action="/approver/expense/{{ $expense->id }}" method="post">
                        @method('put')
                        @csrf
                        <label for="name">Omschrijving</label>
                        <input type="text" name="name" id="name" class="form-control " placeholder="Korte Omschrijving"
                               value="{{$expense->name}}">
                        <label for="name">Type</label>
                        <input type="text" name="name" id="name" class="form-control " placeholder="Korte Omschrijving"
                               value="{{$expense->type->name}}">
                        <label for="name">Aanvrager</label>
                        <input type="text" name="name" id="name" class="form-control " placeholder="Korte Omschrijving"
                               value="{{$expense->user->firstname}} {{$expense->user->name}}">
                        <label for="name">created</label>
                        <input type="text" name="name" id="name" class="form-control " placeholder="Korte Omschrijving"
                               value="{{$expense->created_at}}">
                        @switch($expense->type->id)
                            @case(1)
                            @case(2)
                            @case(5)
                            <label for="name">Bedrag</label>
                            <input type="text" name="name" id="name" class="form-control "
                                   placeholder="Bedrag"
                                   value="@foreach($expense->amounts as $amounts)€{{$amounts->amount}}@endforeach">

                            @break
                            @case(3)
                            @case(4)
                            <label for="name">Bedrag</label>
                            <input type="text" name="name" id="name" class="form-control "
                                   placeholder="Bedrag"
                                   value="@foreach($expense->type->parameterType as $type)@foreach($expense->transfers as $transfers)€{{$transfers->distance * $type->value}}@endforeach @endforeach">
                            <label for="name">Afstand</label>
                            <input type="text" name="name" id="name" class="form-control "
                                   placeholder="Afstand"
                                   value="@foreach($expense->transfers as $transfer){{$transfers->distance}}km @endforeach">

                            @break
                        @endswitch
                        <label for="name">volledige omschrijving</label>
                        <input type="text" name="name" id="name" class="form-control " placeholder="Korte Omschrijving"
                               value="{{$expense->description}}">
                        <button type="submit" class="btn btn-light border-dark">Approve</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

@endsection
