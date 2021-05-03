{{--@auth()--}}
{{--    <div class="d-flex toggled " id="wrapper">--}}
{{--        <!-- Sidebar -->--}}
{{--        <div class="bg-light border-right" id="sidebar-wrapper">--}}
{{--            <div class="sidebar-heading">Welkom</div>--}}
{{--            <div class="list-group list-group-flush">--}}
{{--                <h6 class="list-item color_Orange_Back">Onkosten</h6>--}}
{{--                <a href="#" class="list-group-item list-group-item-action bg-light">Bekijken</a>--}}
{{--                <a href="#" class="list-group-item list-group-item-action bg-light">Ingeven</a>--}}
{{--                <h6 class="list-item color_Orange_Back">Opl. Manager</h6>--}}
{{--                <a href="#" class="list-group-item list-group-item-action bg-light">Valideren</a>--}}
{{--                <h6 class="list-item color_Orange_Back">Financiële Dienst</h6>--}}
{{--                <a href="#" class="list-group-item list-group-item-action bg-light">Onkosten beheer</a>--}}
{{--                <a href="#" class="list-group-item list-group-item-action bg-light">Parameter beheer</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endauth--}}
{{--        <!-- /#sidebar-wrapper -->--}}
{{--        <!-- Page Content -->--}}
{{--        <div id="page-content-wrapper">--}}
{{--            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">--}}

{{--                @guest--}}
{{--                    <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">--}}
{{--                            <li class="nav-item active">--}}
{{--                                <a class="nav-link" href="/login">Login<span class="sr-only">(current)</span></a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="/register">Registreer</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                @endguest--}}
<nav class="main-menu">
    <ul>
        @guest()
            <li class="has-subnav">
                <a href="/login">
                    <i class="fas fa-sign-in-alt fa"></i>
                    <span class="nav-text">Login</span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="/register">
                    <i class="far fa-registered fa"></i>
                    <span class="nav-text">Registreer</span>
                </a>
            </li>
        @endguest
        @auth()
            <li class="has-subnav">
                <a href="#">
                    <i class="fas fa-wallet fa"></i>
                    <span class="nav-text">My Expense</span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="fas fa-id-card fa"></i>
                    <span class="nav-text">Mijn profiel aanpassen</span>
                </a>
            </li>
                <li class="has-subnav">
                    <a href="#">
                        <i class="fas fa-unlock-alt fa"></i>
                        <span class="nav-text">Mijn paswoord updaten</span>
                    </a>
                </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="far fa-thumbs-up fa"></i>
                    <span class="nav-text">Onkosten valideren</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-database fa"></i>
                    <span class="nav-text">Parameters aanpassen</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-user-edit fa"></i>
                    <span class="nav-text">Status updaten</span>
                </a>
            </li>
            <br>
            <br>

            <ul class="logout">
                <li>
                    <a href="/logout">
                        <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">Logout</span>
                    </a>
                </li>
            </ul>
    @endauth
</nav>
