<div class="modal fade" id="deleteExpenselinemodal" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="{{ route('deleteexpenselines') }}" method="post">
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content modalborder">
                <div class="modal-header">
                    <h4 class="modal-title">Onkostlijn verwijderen</h4>
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
                        <p>Wil je deze lijn echt verwijderen?</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger border-dark rounded-pill border-0 shadow-sm px-4 submitbtn">
                        Verwijderen
                    </button>

                </div>

            </div>
        </div>


    </form>
</div>
