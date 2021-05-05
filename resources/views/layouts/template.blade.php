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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        jQuery(document).ready(function($){
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        })
    </script>
</head>
<body id="body">
@include('shared.navigation')
<main class="container mt-3">
    @yield('main', 'Page under construction...')
</main>
@include('shared.footer')
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
