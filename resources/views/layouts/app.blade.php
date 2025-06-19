<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('components.head')
</head>

<body class="font-sans antialiased">
    @yield('content')

    @yield('scripts')
</body>

</html>