<div class="row justify-content-center m-auto">
    <div class="col-10 offset-1">
        <div class="container-fluid">
            <div class="row">
                <h3 class="subheadertitle">Details</h3>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="mt-2">Onkostennota</h4>
                        </div>
                        @if($expense->user_id == Auth::user()->id)
                        <div class="col-6 mt-2 text-right">
                            <i class="fas fa-edit btn statusedit" style="color: orangered !important; font-size: 20px;" data-toggle="modal" data-target="#editExpensemodal"></i>
                        </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-12 border detailmainbox "> @yield('detailmain')</div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h4 class="mt-3">Onkosten</h4>
                        </div>
                        @if($expense->user_id == Auth::user()->id)
                        <div class="col-6 mt-2 text-right">
                            <i class="far fa-plus-square btn btn-create statusedit" style="color: orangered !important; font-size: 20px;" data-toggle="modal" data-target="#createExpenselinemodal"
                               data-id="{{$expense->id}}"></i>
                        </div>
                        @endif
                    </div>
                    <div class="row ">
                        <div class="col-12 border detailmainbox "
                             style="min-height:280px "> @yield('detailexpenses')</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12"> @yield('detailsubmit')</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
{{--Modal--}}
<div>
    @yield('detailmodal')
</div>
