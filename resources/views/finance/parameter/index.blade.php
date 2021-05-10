@extends('layouts.template')
@section('title','Parameters')
@section('main')
    <div class="row">
        {{--        marge--}}
        <div class="col-1"></div>
        {{--        marge--}}
        {{--        parameter--}}
        <div class="col-5">
            {{--        Logo--}}
            {{--            <div class="row justify-content-center pb-5">--}}
            {{--                <img src="/assets/logo/MyExpenseLogo.png" class="mobilelogo d-md-none" alt="My expense Logo">--}}
            {{--            </div>--}}
            {{--            User updaten--}}
            <h5 class="display-5 mt-2">Parameters</h5>
            <div class="table col-11 ">
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
        {{--        <div class="col-1"></div>--}}
        {{--        marge--}}
        <div class="col-5">
            <h5 class="display-5 mt-2">Types</h5>
            <div class="table col-11">
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
