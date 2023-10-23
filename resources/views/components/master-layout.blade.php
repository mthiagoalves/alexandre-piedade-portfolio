<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @yield('meta')

    @include('includes.metas')

</head>

<body>
    @include('components.navbar')

    <main>
        {{ $slot }}
    </main>

    @include('scripts.footer-scripts')
</body>

</html>
