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

    <!-- Multiple CSS approaches to ensure one works -->
    <link rel="stylesheet" href="/Cirrixo/assets/app-HiANTs8a.css">
    <link rel="stylesheet" href="/cirrixo/assets/app-HiANTs8a.css">
    <link rel="stylesheet" href="/cirrixo_theme.css">
    
    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

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

    <!-- Basic fallback styles -->
    <style>
        :root {
            --primary-color: #0ea5e9;
            --background-color: #ffffff;
            --background-secondary-color: #f8fafc;
            --text-color: #1e293b;
            --neutral-color: #e2e8f0;
        }
        .dark {
            --primary-color: #0ea5e9;
            --background-color: #0f172a;
            --background-secondary-color: #1e293b;
            --text-color: #f8fafc;
            --neutral-color: #334155;
        }
        .text-primary { color: var(--primary-color); }
        .bg-primary { background-color: var(--primary-color); }
        .bg-background { background-color: var(--background-color); }
        .bg-background-secondary { background-color: var(--background-secondary-color); }
        .text-base { color: var(--text-color); }
        .border-neutral { border-color: var(--neutral-color); }
        .text-white { color: white; }
        .p-4 { padding: 1rem; }
        .flex { display: flex; }
        .flex-col { flex-direction: column; }
        .gap-2 { gap: 0.5rem; }
        .rounded { border-radius: 0.25rem; }
        .w-full { width: 100%; }
        .min-h-screen { min-height: 100vh; }
        .antialiased { -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }
        .flex-grow { flex-grow: 1; }
        .overflow-auto { overflow: auto; }
        .container { width: 100%; max-width: 1280px; margin-left: auto; margin-right: auto; }
        .mt-24 { margin-top: 6rem; }
        .mx-auto { margin-left: auto; margin-right: auto; }
        .px-4 { padding-left: 1rem; padding-right: 1rem; }
        .py-8 { padding-top: 2rem; padding-bottom: 2rem; }
    </style>

    {!! hook('head') !!}
</head>

<body class="w-full bg-background text-base min-h-screen flex flex-col antialiased" x-data="{darkMode: localStorage.getItem('darkMode') === 'true' || window.matchMedia('(prefers-color-scheme: dark)').matches}" :class="{'dark': darkMode}">
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

    <!-- Load JS at the end -->
    <script src="/Cirrixo/assets/app-DvN4n7f7.js"></script>
    <script src="/cirrixo/assets/app-DvN4n7f7.js"></script>
</body>

</html> 