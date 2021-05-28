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
    <div class="row justify-content-end">
        <div class="col-12 text-right">
            <i class="fas fa-edit btn" data-toggle="modal" data-target="#editExpensemodal"></i>
        </div>
    </div>
@endsection
@section('detailexpenses')
    <div class="row justify-content-end">
        <div class="col-12 text-right">
            <i class="fas fa-plus-circle"></i>
        </div>
    </div>
    <table id="detailTable">
        <thead>
        <tr>
            <th>Omschrijving</th>
            <th>Datum</th>
            <th>Bedrag</th>
            <th>Bijlage</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($expense->expenselines as $expenselines)
            <tr>
                <td>{{$expenselines->description}}</td>
                <td>{{$expenselines->date}}</td>
                <td>€{{$expenselines->amount}}</td>
                <td><a href="{{$expenselines->attachmment}}"><i class="fas fa-file-download"></i></a></td>
                    <td><i id="editexpenseline" class="fas fa-edit btn editexpenseline" data-toggle="modal"
                           title="{{$expenselines->id}}"
                           data-target="#editExpenselinemodal" data-id="{{$expenselines->id}}"></i></td>
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
                <i class="far fa-trash-alt" type="submit"></i>
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
    <div class="modal fade" id="editExpenselinemodal" tabindex="-1" role="dialog" aria-hidden="true">
        <form action="/user/expense/{{$expense->id }}" method="post">
            @method('put')
            @csrf
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Onkostlijn aanpassen</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title" class="d-none">id</label>
                            <input type="text" name="expenseline_id" id="expenseline_id"
                                   class="d-none"
                                   placeholder="expenseline_id"
                                   value="">
                        </div>
                        <div class="form-group">
                            <label for="title">Omschrijving</label>
                            <input type="text" name="title" id="title"
                                   class="form-control @error('title') is-invalid @enderror"
                                   placeholder="Titel"
                                   value="{{$expenselines->description->where('id','=',)}}"
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
                                   value="{{ old('omschrijving',$expense->description) }}"
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
@endsection
