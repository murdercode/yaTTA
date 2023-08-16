<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'YaTTA!' }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=ubuntu:300,400,500,700" rel="stylesheet"/>


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
    @livewireScripts

</head>
<body class="antialiased selection:bg-rose-500/70">

<div class="flex min-h-screen flex-col bg-gray-850 text-gray-300">

    <div class="mx-auto flex w-full items-start">

        <livewire:sidebar/>

        <div class="w-full">
            {{ $slot }}
        </div>

    </div>

</div>

</body>

</html>
