
                            <thead>
                            <tr>
                                <th>Titel</th>
                                <th>Datum</th>
                                <th class="dt-head-center">€</th>
                                <th>CostCenter</th>
                                <th>CC-Code</th>
                                @if(count($expenses)>0)
                                @foreach($expenses as $expense)
                                @endforeach
                                @if($expense->user_id == Auth::user()->id)
                                    <th class="dt-head-center"><i class="fas fa-wallet"></i></th>
                                @endif
                                @endif
                                <th class="hidden-column">StatusOmschrijving</th>
                                <th class="hidden-column"></th>
                                <th class="dt-head-center"><i class="fas fa-tasks"></i></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($expenses as $expense)
                                <tr>
                                    <td>{{ $expense->name}}</td>
                                    <td>{{\Carbon\Carbon::parse($expense->date)->format('d/m/Y')}}</td>
                                    <td class="dt-head-center">€ {{$expense->expenselines->where('date','<=',now())->where('active',1)->sum('amount')}}</td>
                                    <td>{{$expense->costcentre->description}}</td>
                                    <td>{{$expense->costcentre->costcentre}}</td>

                                    @foreach($expense->expenseprogress->where('active',1) as $expenseprogress)
                                        <td class="hidden-column">{{ $expenseprogress->status->name}}</td>
                                        @if($expense->user_id == Auth::user()->id)
                                        <td class="dt-center">
                                                                                <span class="border-0 bg-transparent"
                                                                                      data-toggle="tooltip"
                                                                                      title="{{ $expenseprogress->status->name }}">
                                                                                                                    <i class="{{$expenseprogress->status->icon}}"
                                                                                                                       style="color: {{$expenseprogress->status->color}}!important;"></i>
                                                                                                                </span>
                                        </td>
                                        @endif

                                        <td class="hidden-column">{{ $expenseprogress->status->id}}</td>
                                    @endforeach
                                    <td class="dt-center">
                                        <form action="expense/{{ $expense->id }}/edit" method="POST">
                                            @method('get')
                                            @csrf
                                            <div class="btn-group btn-sm">
                                                <button type="submit" class="border-0 bg-transparent"
                                                        data-toggle="tooltip"
                                                        title="Detail {{ $expense->name }}">
                                                    <i class="far fa-eye btnTableView"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th class="dt-head-center"></th>
                                <th></th>
                                <th></th>
                                @if(count($expenses)>0)
                                @if($expense->user_id == Auth::user()->id)
                                <th></th>
                                @endif
                                @endif
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            </tfoot>
