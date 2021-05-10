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
@include('shared.header')
@include('shared.navigation')
<div class="container-fluid ">
    <div class="row no-gutter">
        {{--        <div class="col-md-6 d-none d-md-flex bgColor">@yield('image')</div>--}}
        <div class="col-md-6 bg-light">
            <main>
                @include('shared.alert')
                @yield('main', '...')
            </main>

        </div>
    </div>
</div>
@include('shared.footer')
<script src="{{ mix('js/app.js') }}"></script>
@yield('Scripts')
@include('shared.js')

</body>
</html>
