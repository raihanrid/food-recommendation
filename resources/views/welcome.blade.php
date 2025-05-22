<!DOCTYPE html>
<html class="scroll-smooth dark-mode-toggle" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{asset('/')}}favicon.ico">
        <title>Food Recommendation</title>

        <!-- Styles / Scripts -->
        {{-- @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))) --}}
        @vite(['resources/css/app.css'])
        {{-- @else --}}
        {{-- @endif --}}
    </head>
    <body>
        <div id="app"></div>

        <script>
            const ASSET_URL = "{{ asset('/') }}";
        </script>
        @vite('resources/js/app.js')
    </body>
</html>
