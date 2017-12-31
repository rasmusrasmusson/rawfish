<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.frontend.head')
</head>
<body>
<div id="app">
        @include('layouts.frontend.header')

        @yield('content')

        @include('layouts.frontend.footer')

</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
