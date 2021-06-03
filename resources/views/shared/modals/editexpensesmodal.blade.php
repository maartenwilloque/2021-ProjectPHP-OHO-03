<div class="modal fade" id="editExpensemodal" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="/user/expense/{{$expense->id }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content modalborder">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Onkost aanpassen</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Titel</label>
                        <input type="text" name="title" id="title"
                               class="rounded-pill border-0 shadow-sm px-4 form-control @error('title') is-invalid @enderror"
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
                               class=" rounded-pill border-0 shadow-sm px-4 form-control @error('description') is-invalid @enderror"
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
                            <input class="rounded-pill border-0 shadow-sm px-4" list="costcentre" name="costcentre"
                                   data-value="{{ old('kostenplaats',$expense->costcentre->description) }}" style="width: 100% !important;">
                        </label>
                        <datalist class="rounded-pill border-0 shadow-sm px-4" id="costcentre" style="width: 100% !important;">
                            @foreach($costcentre as $costcentre)
                                <option value="{{$costcentre->id}}">{{$costcentre->description}}
                                    ({{$costcentre->costcentre}})
                                </option>
                            @endforeach
                        </datalist>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success border-dark rounded-pill border-0 shadow-sm px-4 submitbtn">
                        Aanpassen
                    </button>

                </div>

            </div>
        </div>


    </form>
</div>
