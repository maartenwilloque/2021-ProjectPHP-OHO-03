@extends('layouts.template')
@section('title','My expensenses')
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
                <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" href="#tab1" aria-selected="true" class="active">Login</a></li>
                    <li><a data-toggle="tab" href="#tab2" aria-selected="false">Medewerker</a></li>
                    <li><a data-toggle="tab" href="#tab3" aria-selected="false">Approver</a></li>
                    <li><a data-toggle="tab" href="#tab4" aria-selected="false">Financieel Medewerker</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="tab-content">
                    <div id="tab1" class="tab-pane fade show active">
                        <div class="accordion">
                            <div class="card">
                                <div class="card-header" id="infraOne">
                                    <a href="#collapseOne" data-toggle="collapse" data-target="#collapseOne"
                                       aria-expanded="false" aria-controls="collapseOne">
                                        <p class="mb-0">
                                            Profiel/Paswoord aanpassen
                                        </p>
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="infraOne"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Using Amazon AWS technology which is an industry leader for reliability you will
                                        be able to experience an uptime in the vicinity of 99.95%.
                                    </div>
                                </div>
                            </div><!-- close card-->
                            <div class="card">
                                <div class="card-header" id="infraTwo">
                                    <a href="#collapseTwo" class="collapsed" data-toggle="collapse"
                                       data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <p class="mb-0">Onkosten Algemeen</p>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="infraTwo"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Solodev CMS is built using PHP, Javascript, HTML and CSS.
                                    </div>
                                </div>
                            </div><!-- card-->
                            <div class="card">
                                <div class="card-header" id="infraThree">
                                    <a href="#collapseThree" class="collapsed" data-toggle="collapse"
                                       data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <p class="mb-0">Onkosten Fiets</p>
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="infraThree"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        We support the current and previous major releases of Google Chrome™, Firefox®,
                                        Safari®, Microsoft® Edge™, and Internet Explorer® on a rolling basis. Each time
                                        a new version is released, we begin supporting that version and stop supporting
                                        the third most recent version.
                                    </div>
                                </div>
                            </div><!-- card-->
                            <div class="card">
                                <div class="card-header" id="infraThree">
                                    <a href="#collapseThree" class="collapsed" data-toggle="collapse"
                                       data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <p class="mb-0">Onkosten Laptop</p>
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="infraThree"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        We support the current and previous major releases of Google Chrome™, Firefox®,
                                        Safari®, Microsoft® Edge™, and Internet Explorer® on a rolling basis. Each time
                                        a new version is released, we begin supporting that version and stop supporting
                                        the third most recent version.
                                    </div>
                                </div>
                            </div><!-- card-->
                        </div><!-- accordion-->
                    </div><!-- tab 1-->
                    <div id="tab2" class="tab-pane fade">
                        <div class="accordion">
                            <div class="card">
                                <div class="card-header" id="aboutOne">
                                    <a href="#collapseFour" data-toggle="collapse" data-target="#collapseFour"
                                       aria-expanded="false" aria-controls="collapseOne">
                                        <p class="mb-0">What are the benefits of Solodev CMS?</p>
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="aboutOne"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        With Solodev CMS, you and your visitors will benefit from a finely-tuned
                                        technology stack that drives the highest levels of site performance, speed and
                                        engagement - and contributes more to your bottom line.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="aboutTwo">
                                    <a href="#collapseFive" class="collapsed" data-toggle="collapse"
                                       data-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                                        <p class="mb-0">How easy is it to build a website with Solodev CMS?</p>
                                    </a>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="aboutTwo"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Building a website is extremely easy. With a working knowledge of HTML and CSS
                                        you will be able to have a site up and running in no time.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="aboutThree">
                                    <a href="#collapseSix" class="collapsed" data-toggle="collapse"
                                       data-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                        <p class="mb-0">Can I get a personalized demonstration of Solodev CMS?</p>
                                    </a>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="aboutThree"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Yes, click here to request a demo and one of our representatives will contact
                                        you shortly to setup a time convenient to you.
                                    </div>
                                </div>
                            </div>
                        </div><!-- accordion-->
                    </div><!-- tab3 -->
                    <div id="tab3" class="tab-pane fade">
                        <div class="accordion">
                            <div class="card">
                                <div class="card-header" id="aboutOne">
                                    <a href="#collapseFour" data-toggle="collapse" data-target="#collapseFour"
                                       aria-expanded="false" aria-controls="collapseOne">
                                        <p class="mb-0">What are the benefits of Solodev CMS?</p>
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="aboutOne"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        With Solodev CMS, you and your visitors will benefit from a finely-tuned
                                        technology stack that drives the highest levels of site performance, speed and
                                        engagement - and contributes more to your bottom line.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="aboutTwo">
                                    <a href="#collapseFive" class="collapsed" data-toggle="collapse"
                                       data-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                                        <p class="mb-0">How easy is it to build a website with Solodev CMS?</p>
                                    </a>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="aboutTwo"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Building a website is extremely easy. With a working knowledge of HTML and CSS
                                        you will be able to have a site up and running in no time.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="aboutThree">
                                    <a href="#collapseSix" class="collapsed" data-toggle="collapse"
                                       data-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                        <p class="mb-0">Can I get a personalized demonstration of Solodev CMS?</p>
                                    </a>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="aboutThree"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Yes, click here to request a demo and one of our representatives will contact
                                        you shortly to setup a time convenient to you.
                                    </div>
                                </div>
                            </div>
                        </div><!-- accordion-->
                    </div><!-- tab4 -->
                    <div id="tab4" class="tab-pane fade">
                        <div class="accordion">
                            <div class="card">
                                <div class="card-header" id="aboutOne">
                                    <a href="#collapseFour" data-toggle="collapse" data-target="#collapseFour"
                                       aria-expanded="false" aria-controls="collapseOne">
                                        <p class="mb-0">What are the benefits of Solodev CMS?</p>
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="aboutOne"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        With Solodev CMS, you and your visitors will benefit from a finely-tuned
                                        technology stack that drives the highest levels of site performance, speed and
                                        engagement - and contributes more to your bottom line.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="aboutTwo">
                                    <a href="#collapseFive" class="collapsed" data-toggle="collapse"
                                       data-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                                        <p class="mb-0">How easy is it to build a website with Solodev CMS?</p>
                                    </a>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="aboutTwo"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Building a website is extremely easy. With a working knowledge of HTML and CSS
                                        you will be able to have a site up and running in no time.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="aboutThree">
                                    <a href="#collapseSix" class="collapsed" data-toggle="collapse"
                                       data-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                        <p class="mb-0">Can I get a personalized demonstration of Solodev CMS?</p>
                                    </a>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="aboutThree"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Yes, click here to request a demo and one of our representatives will contact
                                        you shortly to setup a time convenient to you.
                                    </div>
                                </div>
                            </div>
                        </div><!-- accordion-->
                    </div><!-- tab2 -->
                </div><!-- tab content-->
            </div>
        </div>
    </div>
    <!--end modal-->

@endsection
