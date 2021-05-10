@extends('layouts.template')
@section('title','Parameters')
@include('shared.navigation')

@section('main')
    <div class="row justify-content-center m-auto">
        {{--        marge--}}
        <div class="col-md-1"></div>
        {{--        marge--}}
        {{--        Parameters--}}
        <div class="col-sm-12 col-md-4">
            {{--        Logo--}}
            <div class="row justify-content-center pb-5">
                <img src="/assets/logo/MyExpenseLogo.png" class="mobilelogo d-md-none" alt="My expense Logo">
            </div>
            {{--            Parameters updaten--}}
            <h5 class="display-5">Parameters</h5>
            <div class="table-responsive-sm ">
                <table class="table" id="myTable">
                    <thead>
                    <tr>
                        <th class="small" onclick="sortTable(0)">#<i class="fas fa-sort small"></i></th>
                        <th class="small" onclick="sortTable(2)">Type<i class="fas fa-sort"></i></th>
                        <th class="small" onclick="sortTable(1)">€<i class="fas fa-sort"></i></th>
                        <th class="small" onclick="sortTable(3)">Geldig_Van<i class="fas fa-sort"></i></th>
                        <th class="small" onclick="sortTable(4)">Geldig_Tot<i class="fas fa-sort"></i></th>
                        <th class="small">Update</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($parametersType as $prmType)
                        <tr>
                            <td class="small">{{ $prmType->id }}</td>
                            <td class="small">{{ $prmType->type_id }}</td>
                            <td class="small">{{ $prmType->value }}</td>
                            <td class="small">{{ $prmType->from_date }}</td>
                            <td class="small">{{ $prmType->to_date }}</td>
                            <td>
                                <form action="/finance/parameter/{{ $prmType->id }}" method="post">
{{--                                    @method('delete')--}}
                                    @csrf
                                    <div class="btn-group btn-group">
                                        <a href="/finance/parameter/{{ $prmType->id }}/edit"
                                           class="btn btn-outline-success"
                                           data-toggle="tooltip"
                                           title="Edit {{ $prmType->id }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        {{--                                <button type="submit" class="btn btn-danger"--}}
                                        {{--                                        data-toggle="tooltip"--}}
                                        {{--                                        title="Delete {{ $user->name }}">--}}
                                        {{--                                    <i class="fas fa-trash-alt"></i>--}}
                                        {{--                                </button>--}}
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{--        einde Parameters--}}
        {{--        marge--}}
        <div class="col-md-1"></div>
        {{--        marge--}}
        {{--        Paswoord--}}
        <div class="col-sm-12 col-md-4">
            <div class="row justify-content-center pb-5">
                {{--                <img src="/assets/logo/MyExpenseLogo.png" class="mobilelogo d-md-none" alt="My expense Logo">--}}
            </div>
{{--            <h3 class="display-4">Paswoord</h3>--}}
{{--            <form method="POST" action="{{ '/user/password'}}">--}}
{{--                @csrf--}}
{{--                <div class="form-group row">--}}
{{--                    <div class="col-6">--}}
{{--                        <label for="current_password"--}}
{{--                               class="col-form-label text-md-right">{{ __('Huidig paswoord') }}</label>--}}
{{--                        <div class="">--}}
{{--                            <input id="current_password" type="password"--}}
{{--                                   class="form-control @error('current_password') is-invalid @enderror"--}}
{{--                                   name="current_password" value="{{ old('current_password' ) }}" required--}}
{{--                                   autofocus>--}}
{{--                            @error('current_password')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                                                        <strong>{{ $message }}</strong>--}}
{{--                                                                    </span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-6"> </div>--}}
{{--                    <div class="col-6">--}}
{{--                        <label for="password"--}}
{{--                               class="col-form-label text-md-right">{{ __('Nieuw paswoord') }}</label>--}}
{{--                        <div class="">--}}
{{--                            <input id="password" type="password"--}}
{{--                                   class="form-control @error('password') is-invalid @enderror"--}}
{{--                                   name="password"--}}
{{--                                   value="{{ old('password' ) }}" required autofocus>--}}
{{--                            @error('password')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                                                        <strong>{{ $message }}</strong>--}}
{{--                                                                    </span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="form-group row">--}}
{{--                    <div class="col-12">--}}
{{--                        <button type="submit" class="rounded">--}}
{{--                            {{ __('Update') }}--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
        {{--        einde paswoord--}}
        {{--        marge--}}
        <div class="col-md-1"></div>
        {{--        marge--}}
    </div>







    <script>
        function sortTable(n) {
            var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
            table = document.getElementById("myTable");
            switching = true;
            //Set the sorting direction to ascending:
            dir = "asc";
            /*Make a loop that will continue until
            no switching has been done:*/
            while (switching) {
                //start by saying: no switching is done:
                switching = false;
                rows = table.rows;
                /*Loop through all table rows (except the
                first, which contains table headers):*/
                for (i = 1; i < (rows.length - 1); i++) {
                    //start by saying there should be no switching:
                    shouldSwitch = false;
                    /*Get the two elements you want to compare,
                    one from current row and one from the next:*/
                    x = rows[i].getElementsByTagName("TD")[n];
                    y = rows[i + 1].getElementsByTagName("TD")[n];
                    /*check if the two rows should switch place,
                    based on the direction, asc or desc:*/
                    if (dir == "asc") {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                            //if so, mark as a switch and break the loop:
                            shouldSwitch = true;
                            break;
                        }
                    } else if (dir == "desc") {
                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                            //if so, mark as a switch and break the loop:
                            shouldSwitch = true;
                            break;
                        }
                    }
                }
                if (shouldSwitch) {
                    /*If a switch has been marked, make the switch
                    and mark that a switch has been done:*/
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                    //Each time a switch is done, increase this count by 1:
                    switchcount++;
                } else {
                    /*If no switching has been done AND the direction is "asc",
                    set the direction to "desc" and run the while loop again.*/
                    if (switchcount == 0 && dir == "asc") {
                        dir = "desc";
                        switching = true;
                    }
                }
            }
        }
    </script>
@endsection
