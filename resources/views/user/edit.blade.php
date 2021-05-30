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
            <div class="col-2" ><p>
                    {{$expenseprogress->status->name}}
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
    <table id="MyExpenslinesTable" class=" table table-fixed">
        <thead>
        <tr>
            <th class="d-none">#</th>
            <th>Omschrijving</th>
            <th>Datum</th>
            <th>Bedrag</th>
            <th class="d-none">Afstand</th>
            <th>Bijlage</th>
            <th></th>
        </tr>
        </thead>
        <tbody class="detailtable overflow-hidden" style="max-height: 150px">
        @foreach($expense->expenselines as $expenselines)
            <tr>
                <td class="d-none">{{$expenselines->id}}</td>
                <td>{{$expenselines->description}} ({{$expenselines->type->name}})</td>
                <td>{{$expenselines->date}}</td>
                <td>€{{$expenselines->amount}}</td>
                <td class="d-none">€{{$expenselines->distance}}</td>
                @if(isset($expenselines->attachment))
                    <td><a href='{{$expenselines->attachment}}'><i class="fas fa-file-download"></i></a></td>
                @else
                    <td><i class="far fa-times-circle"></i></td>
                @endif
                <td><i id="editexpenseline" class="fas fa-edit btn btn-edit" data-toggle="modal"
                       title="{{$expenselines->id}}"
                       data-target="#editExpenselinemodal" data-id="{{$expenselines->id}}"
                       data-description="{{$expenselines->description}}" data-date="{{$expenselines->date}}"
                       data-amount="{{$expenselines->amount}}" data-distance="{{$expenselines->distance}}"

                       data-attachment="{{$expenselines->attachmment}}" data-type="{{$expenselines->type_id}}"></i>

                    <i id="editexpenseline"
                       class="far fa-trash-alt btn btn-delete"
                       data-toggle="modal"
                       title="{{$expenselines->id}}"
                       data-target="#deleteExpenselinemodal"
                       data-id="{{$expenselines->id}}"></i>

                </td>
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
                <i class="far fa-trash-alt statusedit" type="submit"></i>
            </form>
        </div>
        <div class="col-12 text-right">
            <form action="{{ route('submitexpense') }}" method="post">
                @csrf
                <label for="id" class="d-none">id</label>
                <input type="text" name="id" id="id"
                       class="d-none"
                       placeholder="id"
                       value="{{$expense->id}}">
                <button type="submit" class="btn btn-success border-dark rounded-pill border-0 shadow-sm px-4 statusedit">
                    Indienen
                </button>
            </form>
        </div>
    </div>

@endsection
@section('detailmodal')
    {{--    Update Expense modal--}}
    <div class="modal fade" id="editExpensemodal" tabindex="-1" role="dialog" aria-hidden="true">
        <form action="/user/expense/{{$expense->id }}" method="post">
            @method('put')
            @csrf
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Onkost aanpassen</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Titel</label>
                            <input type="text" name="title" id="title"
                                   class="form-control @error('title') is-invalid @enderror"
                                   placeholder="Titel"
                                   value="{{ old('titel',$expense->name) }}"
                                   required>
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">Omschrijving</label>
                            <input type="text" name="description" id="description"
                                   class="form-control @error('description') is-invalid @enderror"
                                   placeholder="Omschrijving"
                                   value="{{ "omschrijving", old('omschrijving',$expense->description) }}"
                                   required>
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="costcentre">Kostenplaats</label>
                            <br>
                            <label>
                                <input list="costcentre" name="costcentre"
                                       data-value="{{ old('kostenplaats',$expense->costcentre->description) }}">
                            </label>
                            <datalist id="costcentre">
                                @foreach($costcentre as $costcentre)
                                    <option value="{{$costcentre->id}}">{{$costcentre->description}}
                                        ({{$costcentre->costcentre}})
                                    </option>
                                @endforeach
                            </datalist>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success border-dark rounded-pill border-0 shadow-sm px-4">
                            Aanpassen
                        </button>

                    </div>

                </div>
            </div>


        </form>
    </div>
    {{--    Update Expenselines modal--}}
    <div class="modal fade" id="editExpenselinemodal" tabindex="-1" role="dialog" aria-hidden="true">
        <form action="{{ route('updateexpenselines') }}" method="post">
            @csrf
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Onkostlijn aanpassen</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body editExpenselinemodal">
                        <div class="form-group">
                            <label for="id" class="d-none">id</label>
                            <input type="text" name="id" id="id"
                                   class="d-none"
                                   placeholder="id"
                                   value="">
                        </div>
                        <div class="form-group">
                            <label for="description" class="">Omschrijving</label>
                            <input type="text" name="description" id="description"
                                   class=""
                                   placeholder="expenseline_description"
                                   value="">
                        </div>
                        <div class="form-group">
                            <label for="date">Datum</label>
                            <input type="date" name="date" id="date"
                                   placeholder="Omschrijving"
                                   value="">
                        </div>
                        <div class="form-group amount_input">
                            <label for="amount">Bedrag</label>
                            <input type="text" name="amount" id="amount"
                                   placeholder="Omschrijving"
                                   value="">
                        </div>
                        <div class="form-group distance_input">
                            <label for="distance">Afstand</label>
                            <input type="text" name="distance" id="distance"
                                   placeholder="Omschrijving"
                                   value="">
                        </div>
                        <div class="form-group">
                            <label for="attachment">Bijlage</label>
                            <input type="text" name="attachment" id="attachment"
                                   placeholder="Omschrijving"
                                   value="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success border-dark rounded-pill border-0 shadow-sm px-4">
                            Aanpassen
                        </button>

                    </div>

                </div>
            </div>


        </form>
    </div>
    {{--    Create Expenselines modal--}}
    <div class="modal fade" id="createExpenselinemodal" tabindex="-1" role="dialog" aria-hidden="true">
        <form action="{{ route('createexpenselines') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Onkostlijn aanmaken</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body createExpenselinemodal">
                        <div class="form-group">
                            <label for="id" class="d-none">id</label>
                            <input type="text" name="id" id="id"
                                   class="d-none"
                                   placeholder="id"
                                   value="">
                        </div>
                        <div class="form-group">
                            <label for="type_create">Type</label>
                            <select class="type_input" name="type" id="type_create">
                                <option value="" disabled selected>Type</option>
                                @foreach($types as $type )
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description" class="">Omschrijving</label>
                            <input type="text" name="description" id="description"
                                   class=""
                                   placeholder="Omschrijving"
                                   value="">
                        </div>
                        <div class="form-group">
                            <label for="date">Datum</label>
                            <input type="date" name="date" id="date"
                                   placeholder="Datum"
                                   value="">
                        </div>
                        <div class="form-group d-none amount_input">
                            <label for="amount">Bedrag</label>
                            <input type="text" name="amount" id="amount"
                                   placeholder="Bedrag"
                                   value="">
                        </div>
                        <div class="form-group d-none distance_input">
                            <label for="distance">Afstand</label>
                            <input type="text" name="distance" id="distance"
                                   placeholder="Afstand"
                                   value="">
                        </div>
                        <div class="form-group">
                            <label>Bijlage</label>
                            <input type="file" name="file" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success border-dark rounded-pill border-0 shadow-sm px-4">
                            Toevoegen
                        </button>

                    </div>

                </div>
            </div>


        </form>
    </div>
    {{--    Delete Expenselines modal--}}
    <div class="modal fade" id="deleteExpenselinemodal" tabindex="-1" role="dialog" aria-hidden="true">
        <form action="{{ route('deleteexpenselines') }}" method="post">
            @csrf
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Onkostlijn verwijderen</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body deleteExpenselinemodal">
                        <div class="form-group">
                            <label for="id" class="d-none">id</label>
                            <input type="text" name="id" id="id"
                                   class="d-none"
                                   placeholder="id"
                                   value="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger border-dark rounded-pill border-0 shadow-sm px-4">
                            Verwijderen
                        </button>

                    </div>

                </div>
            </div>


        </form>
    </div>
@endsection
