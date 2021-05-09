<nav>
    <ul class="navbar">
        <li class="nav-item">
            <img src="/assets/logo/MyExpenseLogo.png" class="logo" alt="My expense Logo">
        </li>
        @guest()
            <li>
                <a href="/login">
                    <span class="nav-text">Login</span>
                </a>
            </li>
            <li>
                <a href="/register">
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
                    <li>
                        <a href="/admin/user">
                            <span class="nav-text">Users</span>
                        </a>
                    </li>
            @endif
            <li>
                <a href="/logout"> <span class="nav-text">Logout</span></a>
            </li>
        @endauth
    </ul>
</nav>

