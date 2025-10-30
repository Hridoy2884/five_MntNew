<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Five Minutes' }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>

    <body class="antialiased bg-gray-50 text-gray-900">
        {{-- Navbar --}}
        @livewire('partials.navbar')

        {{-- Main content --}}
        <main>
            {{ $slot }}
        </main>

        {{-- Footer --}}
        @livewire('partials.footer')

        @livewireScripts
    </body>
</html>
