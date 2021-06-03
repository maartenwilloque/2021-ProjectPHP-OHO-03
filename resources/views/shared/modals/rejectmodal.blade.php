<div class="modal fade" id="rejectmodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modalborder">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Reden voor afkeuren</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <textarea type="text" class="frounded-pill border-0 shadow-sm px-4 " id="rejectreason" name="rejectreason" style="width: 100%"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger border-dark rounded-pill border-0 shadow-sm px-4 submitbtn">
                    Afkeuren
                </button>

            </div>
        </div>
    </div>
</div>
