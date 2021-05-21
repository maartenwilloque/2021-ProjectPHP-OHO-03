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
                    <div class="col-12">
{{--                        <form action="/approver/expense/{{$expense->id }}" method="post">--}}
{{--                            @method('put')--}}
{{--                            @csrf--}}
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="name">Type</label>
                                    <input type="text" name="name" id="name"
                                           class="form-control rounded-pill border-0 shadow-sm px-4"
                                           placeholder="Korte Omschrijving"
                                           value="{{$expense->type->name}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="name">Omschrijving</label>
                                    <input type="text" name="name" id="name"
                                           class="form-control rounded-pill border-0 shadow-sm px-4"
                                           placeholder="Korte Omschrijving"
                                           value="{{$expense->name}}"></div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6"><label for="name">Aanvrager</label>
                                    <input type="text" name="name" id="name"
                                           class="form-control rounded-pill border-0 shadow-sm px-4"
                                           placeholder="Korte Omschrijving"
                                           value="{{$expense->user->firstname}} {{$expense->user->name}}"></div>
                                <div class="form-group col-6">
                                    <label for="name">created</label>
                                    <input type="text" name="name" id="name"
                                           class="form-control rounded-pill border-0 shadow-sm px-4"
                                           placeholder="Korte Omschrijving"
                                           value="{{$expense->created_at}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <label for="name">volledige omschrijving</label>
                                    <textarea class="form-control" name="name" id="name"
                                              class="form-control rounded-pill border-0 shadow-sm px-4" rows="3"
                                              placeholder="Korte Omschrijving"
                                    >{{$expense->description}}</textarea></div>
                                <div class="col-6 text-center">
                                    <label for="name">Bijlage</label>
                                    <p><i class="fas fa-cloud-download-alt menu-icons"></i>
                                </div>
                                </p>


                            </div>
                            <div class="row mt-3"> @switch($expense->type->id)
                                    @case(1)
                                    @case(2)
                                    @case(5)
                                    <div class="col-12"><label for="name">Bedrag</label>
                                        <input type="text" name="name" id="name"
                                               class="form-control rounded-pill border-0 shadow-sm px-4"
                                               placeholder="Bedrag"
                                               value="@foreach($expense->amounts as $amounts)€{{$amounts->amount}}"
                                        @endforeach
                                    </div>

                                    @break
                                    @case(3)
                                    @case(4)
                                    <div class="col-6"><label for="name">Bedrag</label>
                                        <input type="text" name="name" id="name"
                                               class="form-control rounded-pill border-0 shadow-sm px-4"
                                               placeholder="Bedrag"
                                               value="@foreach($expense->type->parameterType as $type)@foreach($expense->transfers as $transfers)€{{$transfers->distance * $type->value}}@endforeach @endforeach">
                                    </div>
                                    <div class="col-6"><label for="name">Afstand</label>
                                        <input type="text" name="name" id="name"
                                               class="form-control rounded-pill border-0 shadow-sm px-4"
                                               placeholder="Afstand"
                                               value="@foreach($expense->transfers as $transfer){{$transfers->distance}}km @endforeach">
                                    </div>

                                    @break
                                @endswitch
                            </div>

                            <div class="row mt-5">
                                <form action="/approver/expense/{{$expense->id }}" method="post">
                                    @method('put')
                                    @csrf
                                <div class="col-6 text-center">
                                    <button type="submit" class="btn btn-success border-dark rounded-pill border-0 shadow-sm px-4">Goedkeuren</button>
                                </div>
                                </form>
                                <form action="/approver/expense/{{$expense->id }}" method="post">
                                    @method('delete')
                                    @csrf
                                <div class="col-6 text-center">
                                    <button type="submit" class="btn btn-danger border-dark rounded-pill border-0 shadow-sm px-4">Afkeuren</button>
                                </div>
                                </form>
                            </div>
{{--                        </form>--}}
                    </div>

                </div>
            </div>
        </div>


    </div>
    </div>

@endsection
