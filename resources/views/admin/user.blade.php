@extends('layouts.template')
@section('title','Users')
@include('shared.navigation')

@section('main')
    <h5 class="display-5">Users</h5>
    <div class="table-responsive-sm ">
        <table class="table" id="myTable">
            <thead>
            <tr>
                <th class="small" onclick="sortTable(0)">#<i class="fas fa-sort small"></i></th>
                <th class="small" onclick="sortTable(1)">Naam<i class="fas fa-sort"></i></th>
                <th class="small" onclick="sortTable(2)">Voornaam<i class="fas fa-sort"></i></th>
                <th class="small" onclick="sortTable(3)">Active<i class="fas fa-sort"></i></th>
                <th class="small" onclick="sortTable(4)">Approver<i class="fas fa-sort"></i></th>
                <th class="small" onclick="sortTable(5)">Finance<i class="fas fa-sort"></i></th>
                <th class="small" onclick="sortTable(6)">Admin<i class="fas fa-sort"></i></th>
                <th class="small">Update</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td class="small">{{ $user->id }}</td>
                    <td class="small">{{ $user->name }}</td>
                    <td class="small">{{ $user->firstname }}</td>
                    <td class="small">{{ $user->active }}</td>
                    <td class="small">{{ $user->approver }}</td>
                    <td class="small">{{ $user->finance}}</td>
                    <td class="small">{{ $user->admin }}</td>
                    <td>
                        <form action="/admin/user/{{ $user->id }}" method="post">
                            @method('delete')
                            @csrf
                            <div class="btn-group btn-group">
                                <a href="/admin/user/{{ $user->id }}/edit" class="btn btn-outline-success"
                                   data-toggle="tooltip"
                                   title="Edit {{ $user->name }}">
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
