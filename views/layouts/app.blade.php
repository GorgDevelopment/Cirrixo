<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        {{ config('app.name', 'Paymenter') }}
        @isset($title)
            - {{ $title }}
        @endisset
    </title>
    
    <!-- Attempt to load assets with Vite, with fallback to direct asset loading -->
    @php
    $theme = config('settings.theme');
    $success = false;
    
    try {
        // Vite tries to use the manifest.json file which might not exist
        $manifest = json_decode(file_get_contents(public_path($theme . '/manifest.json')), true);
        $success = !empty($manifest);
    } catch (\Exception $e) {
        $success = false;
    }
    @endphp
    
    @if ($success)
        @vite(['themes/' . $theme . '/js/app.js', 'themes/' . $theme . '/css/app.css'], $theme)
    @else
        <!-- Fallback for when Vite manifest isn't found -->
        <script src="{{ asset('cirrixo/assets/app-DvN4n7f7.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('cirrixo/assets/app-HiANTs8a.css') }}">
    @endif

    @include('layouts.colors')

    @if (config('settings.logo'))
        <link rel="icon" href="{{ Storage::url(config('settings.logo')) }}" type="image/png">
    @endif
    @isset($title)
    <meta content="{{ isset($title) ? config('app.name', 'Paymenter') . ' - ' . $title : config('app.name', 'Paymenter') }}" property="og:title">
    <meta content="{{ isset($title) ? config('app.name', 'Paymenter') . ' - ' . $title : config('app.name', 'Paymenter') }}" name="title">
    @endisset
    @isset($description)
    <meta content="{{ $description }}" property="og:description">
    <meta content="{{ $description }}" name="description">
    @endisset
    @isset($image)
    <meta content="{{ $image }}" property="og:image">
    <meta content="{{ $image }}" name="image">
    @endisset
   
    <meta name="theme-color" content="{{ theme('primary') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {!! hook('head') !!}
</head>

<body class="w-full bg-background text-base min-h-screen flex flex-col antialiased" x-cloak x-data="{darkMode: $persist(window.matchMedia('(prefers-color-scheme: dark)').matches)}" :class="{'dark': darkMode}">
    {!! hook('body') !!}
    <x-navigation />
    <div class="w-full flex flex-grow">
        @if (isset($sidebar) && $sidebar)
            <x-navigation.sidebar title="$title" />
        @endif
        <div class="{{ (isset($sidebar) && $sidebar) ? 'md:ml-64' : '' }} flex flex-col flex-grow overflow-auto">
            <main class="container mt-24 mx-auto px-4 sm:px-6 md:px-8 lg:px-10">
                {{ $slot }}
            </main>
            <x-notification />
            <div class="py-8">
                <x-navigation.footer />
            </div>
        </div>
    </div>
    {!! hook('footer') !!}
</body>

</html> 