<nav>
    <div id="mySidenav" class="sidenav">
        <a href="#" class="closebtn hider toggle btn" id="hidebtn" style="z-index: 2">&times;</a>
        <div class="nav container">
            <div class="row">
                <div class="col-12">
                    <div class="row ">
                        <div class="col-12">
                            <a href="#"> <i id="showbtn" class="fas fa-bars menu-icons"></i></a>
                        </div>
                    </div>
                    {{--            @guest()--}}
                    {{--                <div class="row ">--}}
                    {{--                    <div class="col-12"><a href="/login">--}}
                    {{--                            <span class="nav-text">Login</span>--}}
                    {{--                        </a></div>--}}
                    {{--                </div>--}}
                    {{--                <div class="row">--}}
                    {{--                    <div class="col-12"><a href="/register">--}}
                    {{--                            <span class="nav-text">Registreer</span>--}}
                    {{--                        </a></div>--}}
                    {{--                </div>--}}
                    {{--            @endguest--}}
                    @Auth
                        @if(Auth::user()->active)
                            @include('shared.navigationPartials.active')
                        @endif

                        @if(Auth::user()->approver)
                            @include('shared.navigationPartials.approver')
                        @endif

                        @if(Auth::user()->finance)
                            @include('shared.navigationPartials.finance')
                        @endif

                        @if(Auth::user()->admin)
                            @include('shared.navigationPartials.approver')
                            @include('shared.navigationPartials.finance')
                            <div class="row d-inline-block">
                                <div class="col-12"><a href="/admin/user"><i class="fas fa-users-cog menu-icons"></i>
                                        <span class="nav-text hider toggle">Users</span>
                                    </a></div>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-12">
                                <a href="/logout"><i class="fas fa-sign-out-alt menu-icons"></i>
                                    <span
                                        class="nav-text hider toggle">Logout</span></a></div>
                        </div>
                </div>
                @endauth
            </div>
        </div>
    </div>

</nav>
