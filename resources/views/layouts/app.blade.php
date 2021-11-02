<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/components/sliderbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/components/cardInfo.css') }}" rel="stylesheet">
     <link href="{{ asset('css/components/navbar.css') }}" rel="stylesheet">
     <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <x-components.header />
    <title>@yield('header')</title>
    @yield('scripts')
</head>

<body>

    <x-components.slider-bar />
    <section class="w-full bg-gray-200 py-20 pt-14 ">
        @yield('contenido')
    </section>
    <script type="text/javascript" src="{{ asset('js/components/sliderbar.js') }}"></script>
</body>

</html>
