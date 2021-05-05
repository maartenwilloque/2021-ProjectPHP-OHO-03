{{--<nav class="main-menu">--}}
{{--    <ul>--}}
{{--        @guest()--}}
{{--            <li class="has-subnav">--}}
{{--                <a href="/login">--}}
{{--                    <i class="fas fa-sign-in-alt fa"></i>--}}
{{--                    <span class="nav-text">Login</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="has-subnav">--}}
{{--                <a href="/register">--}}
{{--                    <i class="fas fa-user-plus fa"></i>--}}
{{--                    <span class="nav-text">Registreer</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        @endguest--}}
{{--        @Auth--}}
{{--            @if(Auth::user()->active)--}}
{{--                @include('shared.navigationPartials.active')--}}
{{--            @endif--}}

{{--            @if(Auth::user()->approver)--}}
{{--                @include('shared.navigationPartials.approver')--}}
{{--            @endif--}}

{{--            @if(Auth::user()->finance)--}}
{{--                @include('shared.navigationPartials.finance')--}}
{{--            @endif--}}

{{--            @if(Auth::user()->admin)--}}
{{--                @include('shared.navigationPartials.approver')--}}
{{--                @include('shared.navigationPartials.finance')--}}
{{--            @endif--}}
{{--        @endauth--}}
{{--    </ul>--}}
{{--    <br>--}}
{{--    <br>--}}
{{--    @auth()--}}
{{--        <ul class="logout">--}}
{{--            <li>--}}
{{--                <a href="/logout">--}}
{{--                    <i class="fa fa-power-off fa-2"></i>--}}
{{--                    <span class="nav-text">Logout</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    @endauth--}}
{{--</nav>--}}
    <nav>
        <div class="menu-icon">
           <i class="fa fa-bars fa-2x menu-icon-Color"></i>
        </div>
        <div>
            <img src="assets/logo/MyExpenseLogo.png"  class="logo" alt="My expense Logo">
        </div>
        <div class="menu">
            <ul>
                        @guest()
                            <li>
                                <a href="/login">
                                    <i class="fas fa-sign-in-alt fa"></i>
                                    <span class="nav-text">Login</span>
                                </a>
                            </li>
                            <li>
                                <a href="/register">
                                    <i class="fas fa-user-plus fa"></i>
                                    <span class="nav-text">Registreer</span>
                                </a>
                            </li>
                        @endguest
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
                            @endif
                            <li>
                                <a href="/logout">
                                    <i class="fa fa-power-off fa-2 "></i>
                                    <span class="nav-text logout">Logout</span>
                                </a>
                            </li>
                        @endauth
                    </ul>
                    <br>
                    <br>
            </ul>
        </div>
    </nav>
