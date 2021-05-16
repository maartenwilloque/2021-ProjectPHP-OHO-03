<div class="modal" id="modal-expense">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">expense</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    @method('delete')
                    @csrf
                    <div class="row justify-content-center m-auto">
                        <div class="col-11 offset-1">
                            <div class="container">
                                <div class="row">
                                    <h3 class="display-4 mb-5">Details</h3>
                                </div>
                                <div class="row">
                                    <form action="" method="post">
                                        <label for="name">Omschrijving</label>
                                        <input type="text" name="name" id="name" class="form-control " placeholder="Korte Omschrijving"
                                               value="{{$expense->id}}">
                                        <label for="name">Type</label>
                                        <input type="text" name="name" id="name" class="form-control " placeholder="Korte Omschrijving"
                                               value="{{$expense->type->name}}">
                                        <label for="name">Aanvrager</label>
                                        <input type="text" name="name" id="name" class="form-control " placeholder="Korte Omschrijving"
                                               value="{{$expense->user->firstname}} {{$expense->user->name}}">
                                        <label for="name">created</label>
                                        <input type="text" name="name" id="name" class="form-control " placeholder="Korte Omschrijving"
                                               value="{{$expense->created_at}}">
                                        @switch($expense->type->id)
                                            @case(1)
                                            @case(2)
                                            @case(5)
                                            <label for="name">Bedrag</label>
                                            <input type="text" name="name" id="name" class="form-control "
                                                   placeholder="Bedrag"
                                                   value="@foreach($expense->amounts as $amounts)€{{$amounts->amount}}@endforeach">

                                            @break
                                            @case(3)
                                            @case(4)
                                            <label for="name">Bedrag</label>
                                            <input type="text" name="name" id="name" class="form-control "
                                                   placeholder="Bedrag"
                                                   value="@foreach($expense->type->parameterType as $type)@foreach($expense->transfers as $transfers)€{{$transfers->distance * $type->value}}@endforeach @endforeach">
                                            <label for="name">Afstand</label>
                                            <input type="text" name="name" id="name" class="form-control "
                                                   placeholder="Afstand"
                                                   value="@foreach($expense->transfers as $transfer){{$transfers->distance}}km @endforeach">

                                            @break
                                        @endswitch
                                        <label for="name">volledige omschrijving</label>
                                        <input type="text" name="name" id="name" class="form-control " placeholder="Korte Omschrijving"
                                               value="{{$expense->description}}">
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Save genre</button>
                </form>
            </div>
        </div>
    </div>
</div>
