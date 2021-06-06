<table id="MyExpenslinesTable" class="table">
    <thead>
    <tr>
        <th class="d-none">#</th>
        <th>Omschrijving</th>
        <th>Datum</th>
        <th class="dt-head-left">Bedrag/ Afstand</th>
        <th class="d-none">Afstand</th>
        <th class="dt-head-left">Bijlage</th>
        @if(Auth::user()->finance == true)
            <th>Status</th>
        @else
            <th class="d-none"></th>
        @endif
        @if($expense->user_id == Auth::user()->id)
            <th class="statusedit"></th>
        @else
            <th class="d-none"></th>
        @endif

    </tr>
    </thead>
    <tbody class="overflow-hidden" style="max-height: 250px">
    @foreach($expense->expenselines as $expenselines)
        <tr>
            <td class="d-none">{{$expenselines->id}}</td>
            <td>{{$expenselines->description}} ({{$expenselines->type->name}})</td>
            <td>{{$expenselines->date}}</td>
            <td class="dt-body-left pl-5 ">@if($expenselines->distance == '')
                    €{{$expenselines->amount}}@else{{$expenselines->distance}}km @endif </td>
            <td class="d-none">{{$expenselines->distance}}</td>
            @if(isset($expenselines->attachment))
                <td class="dt-body-center"><a href='../../../uploads/{{$expenselines->attachment}}' target="_blank"><i
                            class="fas fa-file-download"></i></a></td> @else
                <td class="dt-body-justify"><i class="far fa-times-circle "></i></td> @endif
            @if(Auth::user()->finance == true)
                @if($expenselines->active == false)
                    <td><span style="color: red">PAYED</span></td>
                @else
                    <td><span style="color: lime">OPEN</span></td>
                @endif
            @else
                <td></td>
            @endif

            @if($expense->user_id == Auth::user()->id)
                <td class="statusedit"><i id="editexpenseline" class="fas fa-edit btn btn-edit "
                                          style="color: limegreen!important;" data-toggle="modal"
                                          title="{{$expenselines->id}}"
                                          data-target="#editExpenselinemodal" data-id="{{$expenselines->id}}"
                                          data-description="{{$expenselines->description}}"
                                          data-date="{{$expenselines->date}}"
                                          data-amount="{{$expenselines->amount}}"
                                          data-distance="{{$expenselines->distance}}"

                                          data-file='{{$expenselines->attachment}}'
                                          data-type="{{$expenselines->type_id}}"></i>
                    <i id="editexpenseline"
                       class="far fa-trash-alt btn btn-delete" style="color: red!important;"
                       data-toggle="modal"
                       title="{{$expenselines->id}}"
                       data-target="#deleteExpenselinemodal"
                       data-id="{{$expenselines->id}}"></i>

                </td>
            @else
                <td class="d-none"></td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>
