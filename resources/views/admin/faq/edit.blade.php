@extends('layouts.template')
@section('title','Q&A aanpassen')
@section('main')
    <div class="row justify-content-center">
        <div class="col-5 offset-1">
            <div class="row justify-content-center">
                <img src="/assets/logo/MyExpenseLogo.png" class="mobilelogo d-md-none" alt="My expense Logo">
            </div>
            {{--            Profiel updaten--}}
            <h5 class="display-5 mt-2">Update user: {{ $faq->vraag }}</h5>
            <form action="/admin/faq/{{ $faq->id }}" method="post">
                @method('put')
                @csrf
                <div class="form-group">
                    <div class="form-group">
                        <label for="userRol" class="px-4 ">Rol</label>
                        <select type="text" name="userRol" id="userRol"
                                class="rounded-pill border-0 shadow-sm px-4 form-control @error('userRol') is-invalid @enderror"
                                required>
                            <option disabled selected value> -- selecteer rol -- </option>
                            <option value="Active">Active</option>
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
                               required
                               value="{{ old('vraag', $faq->vraag) }}">
                    </div>
                    <div class="form-group">
                        <label for="antwoord" class="px-4 ">Antwoord</label>
                        <input type="text" name="antwoord" id="antwoord"
                               class="rounded-pill border-0 shadow-sm px-4 form-control @error('antwoord') is-invalid @enderror"
                               required
                               value="{{ old('antwoord', $faq->antwoord) }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Save Q & A</button>
            </form>
        </div>
    </div>
@endsection
