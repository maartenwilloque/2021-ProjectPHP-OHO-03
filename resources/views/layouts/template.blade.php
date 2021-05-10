<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>@yield('title', 'Under Construction')</title>
    @include('shared.icons')
</head>
<body>
<div class="container-fluid ">
    <main>
        @include('shared.alert')
        @yield('main', '...')
    </main>
    <script src="{{ mix('js/app.js') }}"></script>
</div>
@include('shared.footer')
</body>
</html>
