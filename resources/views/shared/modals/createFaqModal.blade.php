<div class="modal fade" id="createFaqModal" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="/admin/faq" method="post">
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content modalborder">
                <div class="modal-header">
                    <h4 class="modal-title" id="faqModalLabel">Faq aanmaken</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="userRol" class="px-4 ">Rol</label>
                        <select type="text" name="userRol" id="userRol"
                                class="rounded-pill border-0 shadow-sm px-4 form-control @error('userRol') is-invalid @enderror"
                                required>
                            <option value="Active">Medewerker</option>
                            <option value="Approver">Approver</option>
                            <option value="Financieel medewerker">Financieel medewerker</option>
                        </select>
                    </div>
                    @error('userRol')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <label for="vraag" class="px-4 ">Vraag</label>
                        <input type="text" name="vraag" id="vraag"
                               class="rounded-pill border-0 shadow-sm px-4 form-control @error('vraag') is-invalid @enderror"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="antwoord" class="px-4 ">Antwoord</label>
                        <input type="text" name="antwoord" id="antwoord"
                               class="rounded-pill border-0 shadow-sm px-4 form-control @error('antwoord') is-invalid @enderror"
                               required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit"
                            class="btn btn-success border-dark rounded-pill border-0 shadow-sm px-4 submitbtn">
                        Aanmaken
                    </button>
                </div>
            </div>
        </div>

    </form>
</div>
