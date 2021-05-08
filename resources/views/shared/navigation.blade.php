<nav>
    <ul class="nav">
        <li class="nav-item">
            <img src="/assets/logo/MyExpenseLogo.png" class="logo" alt="My expense Logo">
        </li>
{{--        @guest()--}}
{{--            <li>--}}
{{--                <a href="/login">--}}
{{--                    <i class="fas fa-sign-in-alt fa navAws"></i>--}}
{{--                    <span class="nav-text">Login</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="/register">--}}
{{--                    <i class="fas fa-user-plus fa navAws"></i>--}}
{{--                    <span class="nav-text">Registreer</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        @endguest--}}
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
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </li>
        @endauth
    </ul>
</nav>
