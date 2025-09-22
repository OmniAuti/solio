<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-html_head></x-html_head>
    <body>
        <x-header></x-header>
        {{ $slot }}
    </body>
    <button id="btn--light_dark_mode">Dark/Light</button>
</html>
