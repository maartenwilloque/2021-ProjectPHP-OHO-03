@extends('layouts.template')
@section('title','Aanpassen gebruikers')
@section('main')
    <div class="row">
        <div class="col-5 offset-1">
            {{--            Profiel updaten--}}
            <h5 class="display-5 mt-2">Update user: {{ $user->name." ".$user->firstname }}</h5>
            <form action="/admin/user/{{ $user->id }}" method="post">
                @method('put')
                @csrf
                <fieldset>
                    <div class="form-check">
                        @if($user->active ==1)
                            <input class="form-check-input" type="checkbox" name="active[]" value="" id="activeTrue"
                                   checked>
                            <label class="form-check-label" for="activeTrue">
                                Active
                            </label>
                        @else
                            <input class="form-check-input" type="checkbox" name="active[]" value="" id="activeFalse">
                            <label class="form-check-label" for="activeFalse">
                                Active
                            </label>
                        @endif
                    </div>

                    <div class="form-check">
                        @if($user->approver ==1)
                            <input class="form-check-input" type="checkbox" name="approver[]" value="" id="approverTrue"
                                   checked>
                            <label class="form-check-label" for="approverTrue">
                                Approver
                            </label>
                        @else
                            <input class="form-check-input" type="checkbox" name="approver[]" value=""
                                   id="approverFalse">
                            <label class="form-check-label" for="approverFalse">
                                Approver
                            </label>
                        @endif
                    </div>
                    <div class="form-check">
                        @if($user->finance ==1)
                            <input class="form-check-input" type="checkbox" name="finance[]" value="" id="financeTrue"
                                   checked>
                            <label class="form-check-label" for="financeTrue">
                                Finance
                            </label>
                        @else
                            <input class="form-check-input" type="checkbox" name="finance[]" value="" id="financeFalse">
                            <label class="form-check-label" for="financeFalse">
                                Finance
                            </label>
                        @endif
                    </div>
                    <div class="form-check">
                        @if($user->admin ==1)
                            <input class="form-check-input" type="checkbox" name="admin[]" value="" id="adminTrue"
                                   checked>
                            <label class="form-check-label" for="adminTrue">
                                Admin
                            </label>
                        @else
                            <input class="form-check-input" type="checkbox" name="admin[]" value="" id="adminFalse">
                            <label class="form-check-label" for="adminFalse">
                                Admin
                            </label>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-light border-dark">Save user</button>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
