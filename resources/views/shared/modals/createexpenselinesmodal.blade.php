<div class="modal fade" id="createExpenselinemodal" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="{{ route('createexpenselines') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content modalborder">
                <div class="modal-header">
                    <h4 class="modal-title">Onkostlijn aanmaken</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body createExpenselinemodal">
                    <div class="form-group">
                        <label for="id" class="d-none rounded-pill border-0 shadow-sm px-4 form-control">id</label>
                        <input type="text" name="id" id="id"
                               class="d-none"
                               placeholder="id"
                               value="">
                    </div>
                    <div class="form-group">
                        <label for="type_create">Type</label>
                        <select class="type_input rounded-pill border-0 shadow-sm px-4 form-control" name="type" id="type_create">
                            <option value="" disabled selected>Type</option>
                            @foreach($types as $type )
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description" class="">Omschrijving</label>
                        <input type="text" name="description" id="description"
                               class="rounded-pill border-0 shadow-sm px-4 form-control"
                               placeholder="Omschrijving"
                               value="">
                    </div>
                    <div class="form-group">
                        <label for="date">Datum</label>
                        <input type="date" name="date" id="date"
                               placeholder="Datum"
                               value="" class="rounded-pill border-0 shadow-sm px-4 form-control">
                    </div>
                    <div class="form-group d-none amount_input">
                        <label for="amount">Bedrag</label>
                        <input type="text" name="amount" id="amount"
                               placeholder="Bedrag"
                               value="" class="rounded-pill border-0 shadow-sm px-4 form-control">
                    </div>
                    <div class="form-group d-none distance_input">
                        <label for="distance">Afstand</label>
                        <input type="text" name="distance" id="distance"
                               placeholder="Afstand"
                               value="" class="rounded-pill border-0 shadow-sm px-4 form-control">
                    </div>
                    <div class="form-group">
                        <label>Bijlage</label>
                        <input type="file" name="file" class="rounded-pill border-0 shadow-sm px-4 form-control-file">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success border-dark rounded-pill border-0 shadow-sm px-4 submitbtn">
                        Toevoegen
                    </button>

                </div>

            </div>
        </div>


    </form>
</div>
