<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8c72cf5c6d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>@yield('title', '...')</title>
    @include('shared.icons')
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{--        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>--}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".menu-icon").on("click", function () {
                $("nav ul").toggleClass("showing");
            });
        });

        // Scrolling Effect

        $(window).on("scroll", function () {
            if ($(window).scrollTop()) {
                $('nav').addClass('black');
            } else {
                $('nav').removeClass('black');
            }
        })
    </script>
</head>
<body>
<header>
    <h1>Welcome to my expenses</h1>
</header>
<div class="container-fluid">
    <div class="row">
        <div class="col-2">
            @include('shared.navigation')
        </div>
    </div>

</div>
    <main class="container mt-1 content">
        @include('shared.alert')
        @yield('main', 'Page under construction...')
    </main>
@include('shared.footer')
<script src="{{ mix('js/app.js') }}"></script>
@yield('script_after')
</body>
</html>
