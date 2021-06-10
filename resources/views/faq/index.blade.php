@extends('layouts.template')
@section('title','MyExpense FAQ')
{{--benodigd voorde Faq Page  :/ --}}
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/30c21ac8e0.js"></script>
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 pt-5 pb-5">
                {{--                <p class="my-5"><img src="/assets/logo/MyExpenseLogo.png" alt="logo" class=" logo img-fluid d-block mx-auto"/></p>--}}
                <h2><i class="far fa-question-circle fa-2x btnTableExpConcept"></i> Vragen... We helpen u graag verder
                    <i class="far fa-smile-wink fa-2x btnTableEdit"></i></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                @Auth
                <ul class="nav nav-tabs">
                    @if(Auth::user()->active)
                    <li><a data-toggle="tab" href="#tabMedewerker" aria-selected="true" class="active">Medewerker</a>
                    </li>
                    @endif
                        @if(Auth::user()->admin)
                            <li><a data-toggle="tab" href="#tabApprover" aria-selected="false">Approver</a></li>
                            <li><a data-toggle="tab" href="#tabFinancieel" aria-selected="false">Financieel Medewerker</a></li>

                        @endif
                        @if(Auth::user()->approver && !Auth::user()->admin)
                            <li><a data-toggle="tab" href="#tabApprover" aria-selected="false">Approver</a></li>
                        @endif

                        @if(Auth::user()->finance && !Auth::user()->admin)
                            <li><a data-toggle="tab" href="#tabFinancieel" aria-selected="false">Financieel Medewerker</a></li>
                        @endif
                        @endauth
                </ul>
            </div>
        </div>












        <div class="row">
            <div class="col-sm-12">
                <div class="tab-content">
                    <div id="tabMedewerker" class="tab-pane fade show active">
                        <div class="accordion">
                            @foreach($faqActive as $active)
                                <div class="card">
                                    <div class="card-header" id=about{{ $active->vraag}}>
                                        <a href="#{{ $active->id }}" data-toggle="collapse"
                                           data-target="#{{ $active->id }}" aria-expanded="false"
                                           aria-controls="collapse{{ $active->id }}">
                                            <p class="mb-0">{{ $active->vraag}}</p>
                                        </a>
                                    </div>
                                    <div id="{{ $active->id }}" class="collapse"
                                         aria-labelledby="about{{ $active->vraag}}" data-parent="#accordion">
                                        <div class="card-body">
                                            {{ $active->antwoord}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div><!-- accordion-->
                    </div>
                    {{--                    --}}
                    <div id="tabApprover" class="tab-pane fade">
                        <div class="accordion">
                            @foreach($faqApprover as $Approver)
                                <div class="card">
                                    <div class="card-header" id=about{{ $Approver->vraag}}>
                                        <a href="#{{ $Approver->id }}" data-toggle="collapse"
                                           data-target="#{{ $Approver->id }}" aria-expanded="false"
                                           aria-controls="collapse{{ $Approver->id }}">
                                            <p class="mb-0">{{ $Approver->vraag}}</p>
                                        </a>
                                    </div>
                                    <div id="{{ $Approver->id }}" class="collapse"
                                         aria-labelledby="about{{ $Approver->vraag}}" data-parent="#accordion">
                                        <div class="card-body">
                                            {{ $Approver->antwoord}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div><!-- accordion-->
                    </div>
                    <div id="tabFinancieel" class="tab-pane fade">
                        <div class="accordion">
                            @foreach($faqFinance as $Finance)
                                <div class="card">
                                    <div class="card-header" id=about{{ $Finance->vraag}}>
                                        <a href="#{{ $Finance->id }}" data-toggle="collapse"
                                           data-target="#{{ $Finance->id }}" aria-expanded="false"
                                           aria-controls="collapse{{ $Finance->id }}">
                                            <p class="mb-0">{{ $Finance->vraag}}</p>
                                        </a>
                                    </div>
                                    <div id="{{ $Finance->id }}" class="collapse"
                                         aria-labelledby="about{{ $Finance->vraag}}" data-parent="#accordion">
                                        <div class="card-body">
                                            {{ $Finance->antwoord}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div><!-- accordion-->
                    </div><!-- tab2 -->
                </div><!-- tab content-->
            </div>
        </div>
    </div>
    <!--end modal-->

@endsection
