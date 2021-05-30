<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css"/>
    <title>@yield('title', 'Under Construction')</title>
    @include('shared.icons')
</head>
<body>
@include('shared.header')
@include('shared.navigation')
<div class="container-fluid ">
    @yield('main')
</div>



@include('shared.footer')
<script src="{{ mix('js/app.js') }}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js"></script>
@yield('Scripts')
@include('shared.js')
<br>
<br>
<br>
<br>
</body>
</html>
