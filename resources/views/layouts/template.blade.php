<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>@yield('title', 'Under Construction')</title>
    @include('shared.icons')
</head>
{{--<body>--}}
{{--<header>--}}
{{--    <h1>Welcome to my expenses</h1>--}}
{{--</header>--}}
{{--<div class="container-fluid">--}}
{{--    <div class="row">--}}
{{--        <div class="col-2">--}}
{{--            @include('shared.navigation')--}}
{{--        </div>--}}
{{--    </div>--}}

{{--</div>--}}
{{--    <main class="container mt-1 content">--}}
{{--        @include('shared.alert')--}}
{{--        @yield('main', 'Page under construction...')--}}
{{--    </main>--}}
{{--@include('shared.footer')--}}
{{--<script src="{{ mix('js/app.js') }}"></script>--}}
{{--@yield('script_after')--}}
{{--</body>--}}
{{--</html>--}}
<body>
<div class="container-fluid ">
    <div class="row no-gutter">
        <div class="col-md-6 d-none d-md-flex bgColor">@yield('image')</div>
        <div class="col-md-6 bg-light">
            <main>
                @include('shared.alert')
                @yield('main', '...')
            </main>
            <script src="{{ mix('js/app.js') }}"></script>
        </div>
    </div>
</div>
@include('shared.footer')
</body>
</html>
