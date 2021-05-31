<nav>
    <div id="mySidenav" class="sidenav position-fixed">
        <a href="#" class="closebtn hider toggle btn" id="hidebtn" style="z-index: 2">&times;</a>
        <div class="nav container">
            <div class="row">
                <div class="col-12">
                    <div class="row ">
                        <div class="col-12">
                            <a href="#"> <i id="showbtn" class="fas fa-bars menu-icons"></i></a>
                        </div>
                    </div>
                    @Auth
                        @if(Auth::user()->active)
                            @include('shared.navigationPartials.active')
                        @endif
                        @if(Auth::user()->admin)
                            @include('shared.navigationPartials.approver')
                            @include('shared.navigationPartials.finance')
                            <div class="row justify-content-center">
                                <div class="col-12"><a href="/admin/user"><i class="fas fa-users-cog menu-icons"></i>
                                        <span class="nav-text hider toggle">Users</span>
                                    </a>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12"><a href="/admin/faq"><i
                                            class="fas fa-question-circle menu-icons"></i>
                                        <span class="nav-text hider toggle">Q & A</span>
                                    </a>
                                </div>
                            </div>
                        @endif
                </div>


                @if(Auth::user()->approver && !Auth::user()->admin)
                    @include('shared.navigationPartials.approver')
                @endif

                @if(Auth::user()->finance && !Auth::user()->admin)
                    @include('shared.navigationPartials.finance')
                @endif


            </div>
            @endauth
            <div class="row justify-content-center">
                <div class="col-12">
                    <a href="/logout"><i class="fas fa-sign-out-alt menu-icons"></i>
                        <span
                            class="nav-text hider toggle">Logout</span></a>
                </div>
            </div>
        </div>
    </div>
</nav>

