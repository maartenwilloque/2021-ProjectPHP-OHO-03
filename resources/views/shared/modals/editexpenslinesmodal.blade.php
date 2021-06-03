<div class="modal fade" id="editExpenselinemodal" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="{{ route('updateexpenselines') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content modalborder">
                <div class="modal-header">
                    <h4 class="modal-title">Onkostlijn aanpassen</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body editExpenselinemodal">
                    <div class="form-group">
                        <label for="id" class="d-none">id</label>
                        <input type="text" name="id" id="id"
                               class="d-none rounded-pill border-0 shadow-sm px-4 form-control"
                               placeholder="id"
                               value="">
                    </div>
                    <div class="form-group">
                        <label for="description" class="">Omschrijving</label>
                        <input type="text" name="description" id="description"
                               class="rounded-pill border-0 shadow-sm px-4 form-control"
                               placeholder="expenseline_description"
                               value="">
                    </div>
                    <div class="form-group">
                        <label for="date">Datum</label>
                        <input type="date" name="date" id="date"
                               placeholder="Omschrijving"
                               value="" class="rounded-pill border-0 shadow-sm px-4 form-control">
                    </div>
                    <div class="form-group amount_input">
                        <label for="amount">Bedrag</label>
                        <input type="text" name="amount" id="amount"
                               placeholder="Bedrag"
                               value="" class="rounded-pill border-0 shadow-sm px-4 form-control">
                    </div>
                    <div class="form-group distance_input">
                        <label for="distance">Afstand</label>
                        <input type="text" name="distance" id="distance"
                               placeholder="Omschrijving"
                               value="" class="rounded-pill border-0 shadow-sm px-4 form-control">
                    </div>
                    <div class="form-group">
                        <label>Bijlage</label>
                        <input type="file" name="file" class="form-control-file rounded-pill border-0 shadow-sm px-4">
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
