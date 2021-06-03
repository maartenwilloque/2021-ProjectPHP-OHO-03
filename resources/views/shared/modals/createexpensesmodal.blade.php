<div class="modal fade" id="createExpensemodal" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="/user/expense" method="post">
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content modalborder">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Onkost aanmaken</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title" class="px-4 ">Titel</label>
                        <input type="text" name="title" id="title"
                               class="rounded-pill border-0 shadow-sm px-4 form-control @error('title') is-invalid @enderror"
                               placeholder="Titel"
                               value=""
                               required>
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description" class="px-4 ">Omschrijving</label>
                        <input type="text" name="description" id="description"
                               class="rounded-pill border-0 shadow-sm px-4 form-control @error('description') is-invalid @enderror"
                               placeholder="Omschrijving"
                               value=""
                               required>
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="costcentre" class="px-4 ">Kostenplaats</label>
                        <br>
                        <label>
                            <input list="costcentre" name="costcentre"
                                   data-value="" class="rounded-pill border-0 shadow-sm px-4 form-control">
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
                    <button type="submit" class="btn btn-success border-dark rounded-pill border-0 shadow-sm px-4 submitbtn">
                        Aanmaken
                    </button>
                </div>
            </div>
        </div>

    </form>
</div>
