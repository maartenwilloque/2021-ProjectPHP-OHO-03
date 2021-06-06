<div class="row">
    <div class="col-2"><h5>Titel:</h5>
    </div>
    <div class="col-4"><p>{{$expense->name}}</p>
    </div>
    <div class="col2 offset-4"><p class="pl-5">{{$expense->date}}</p>
    </div>
</div>
<div class="row">
    <div class="col-2"><h5>Eigenaar:</h5>
    </div>
    <div class="col-4">
        <p>{{$expense->user->firstname}} {{$expense->user->name}}</p>
    </div>
    @if($expense->user->id == Auth::user()->id)
    <div class="col-2"><h5>Status:</h5>
    </div>
    @foreach($expense->expenseprogress->where('active',true) as $expenseprogress)
        <div class="col-2"><p>
                {{$expenseprogress->status->name}} <span>@if($expenseprogress->status->id != 4 and $expenseprogress->status->id != 6)
                        <i class="fas fa-info-circle d-none"></i>
                    @else
                        <i class="fas fa-info-circle" data-toggle="tooltip" title="{{$expenseprogress->note}}"></i>
                    @endif</span>
            </p>
            <p class="d-none" id="status">{{$expenseprogress->status->id}}</p>
        </div>
    @endforeach
    @endif
    @if(Auth::user()->finance == true && $expense->user->id != Auth::user()->id)
        <div class="col-2"><h5>Goedgekeurd door:</h5>
        </div>
        @foreach($expense->expenseprogress->where('active',true) as $expenseprogress)
            <div class="col-2"><p>
                    {{$expenseprogress->inspector->firstname}} {{$expenseprogress->inspector->name}}
                </p>
                <p class="d-none" id="status">{{$expenseprogress->status->id}}</p>
            </div>
        @endforeach
    @endif
</div>
<div class="row">
    <div class="col-2"><h5>Kostenplaats:</h5>
    </div>
    <div class="col-4">
        <p>{{$expense->costcentre->description}} ({{$expense->costcentre->costcentre}})</p>
    </div>
    <div class="col-2"><h5>Totaal:</h5>
    </div>
    <div class="col-4"><p>€ {{$expense->expenselines->sum('amount')}}</p>
    </div>
</div>
