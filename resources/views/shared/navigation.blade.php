{{--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand" href="/">My Expense</a>--}}
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsNav">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse" id="collapsNav">--}}
{{--            <ul class="navbar-nav mr-auto">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="/">Home</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="/contact-us">Contact</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            --}}{{--  Auth navigation  --}}
{{--            <ul class="navbar-nav ml-auto">--}}
{{--                @guest--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="/login"><i class="fas fa-sign-in-alt"></i>Login</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="/register"><i class="fas fa-signature"></i>Register</a>--}}
{{--                    </li>--}}
{{--                @endguest--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="/basket"><i class="fas fa-shopping-basket"></i>Basket</a>--}}
{{--                </li>--}}
{{--                @auth--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#!" data-toggle="dropdown">--}}
{{--                            {{ auth()->user()->name }} <span class="caret"></span>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu dropdown-menu-right">--}}
{{--                            <a class="dropdown-item" href="/user/profile"><i class="fas fa-user-cog"></i>Update Profile</a>--}}
{{--                            <a class="dropdown-item" href="/user/password"><i class="fas fa-key"></i>New Password</a>--}}
{{--                            <a class="dropdown-item" href="/user/history"><i class="fas fa-box-open"></i>Order history</a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item" href="/logout"><i class="fas fa-sign-out-alt"></i>Logout</a>--}}
{{--                            @if(auth()->user()->admin)--}}
{{--                                <div class="dropdown-divider"></div>--}}
{{--                                <a class="dropdown-item" href="/admin/genres"><i class="fas fa-microphone-alt"></i>Genres</a>--}}
{{--                                <a class="dropdown-item" href="/admin/records"><i class="fas fa-compact-disc"></i>Records</a>--}}
{{--                                <a class="dropdown-item" href="/admin/users"><i class="fas fa-users-cog"></i>Users</a>--}}
{{--                                <a class="dropdown-item" href="/admin/orders"><i class="fas fa-box-open"></i>Orders</a>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                @endauth--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
@auth()
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Welkom</div>
            <div class="list-group list-group-flush">
                <h6 class="list-item color_Orange_Back">Onkosten</h6>
                <a href="#" class="list-group-item list-group-item-action bg-light">Bekijken</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Ingeven</a>
                <h6 class="list-item color_Orange_Back">Opl. Manager</h6>
                <a href="#" class="list-group-item list-group-item-action bg-light">Valideren</a>
                <h6 class="list-item color_Orange_Back">Financiële Dienst</h6>
                <a href="#" class="list-group-item list-group-item-action bg-light">Onkosten beheer</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Parameter beheer</a>
            </div>
        </div>
    @endauth
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                @auth
                <button class="color_Orange_Back rounded-sm" id="menu-toggle">My Expense</button>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @endauth
                @guest
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="/login">Login<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/register">Registreer</a>
                            </li>
                        </ul>
                    </div>
                @endguest
                @auth()
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="/logout">Logout<span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                @endauth
            </nav>
            <!-- /#wrapper -->
