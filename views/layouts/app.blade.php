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

    <!-- Style reset and Alpine.js cloak -->
    <style>
        [x-cloak] { display: none !important; }
    </style>

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/cirrixo_theme.css">
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Theme colors -->
    @include('layouts.colors')

    <!-- Favicon -->
    @if (config('settings.logo'))
        <link rel="icon" href="{{ Storage::url(config('settings.logo')) }}" type="image/png">
    @endif

    <!-- Meta tags -->
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
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Hook for additional head content -->
    {!! hook('head') !!}
</head>

<body class="bg-[#0d1117] text-gray-200 min-h-screen flex flex-col antialiased" 
      x-data="{darkMode: true}" 
      x-cloak>
    <!-- Body hook -->
    {!! hook('body') !!}
    
    <!-- Navigation -->
    <x-navigation />
    
    <!-- Main content -->
    <div class="flex flex-grow w-full">
        @if (isset($sidebar) && $sidebar)
            <x-navigation.sidebar title="$title" />
        @endif
        
        <div class="{{ (isset($sidebar) && $sidebar) ? 'md:ml-64' : '' }} flex-grow flex flex-col overflow-auto w-full">
            <main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 mt-16">
                {{ $slot }}
            </main>
            
            <!-- Notifications -->
            <x-notification />
            
            <!-- Footer -->
            <div class="mt-auto">
                <x-navigation.footer />
            </div>
        </div>
    </div>
    
    <!-- Footer hook -->
    {!! hook('footer') !!}
</body>

</html> 