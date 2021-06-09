@extends('layouts.template')
@section('title','Update user')
@section('main')
    <div class="row">
        {{--        marge--}}
        <div class="col-1"></div>
        {{--        marge--}}
        {{--        profiel--}}
        <div class="col-5">
            {{--        Logo--}}
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
                                required
                                value="{{ old('userRol', $faq->userRol) }}">
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
                               class="rounded-pill border-0 shadow-sm px-4 form-control @error('vraag') is-invalid @enderror
                               required
                               value="{{ old('vraag', $faq->vraag) }}">
                        </input>
                    </div>
                    <div class="form-group">
                        <label for="antwoord" class="px-4 ">Antwoord</label>
                        <input type="text" name="antwoord" id="antwoord"
                               class="rounded-pill border-0 shadow-sm px-4 form-control @error('antwoord') is-invalid @enderror
                               required
                               value="{{ old('antwoord', $faq->antwoord) }}">
                        </input>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Save genre</button>
            </form>
        </div>
    </div>
@endsection
