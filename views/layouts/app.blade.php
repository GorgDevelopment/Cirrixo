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

    <?php
    $theme = Theme::active();
    $manifestPath = public_path($theme . '/manifest.json');
    $lowerManifestPath = public_path(strtolower($theme) . '/manifest.json');
    
    if (file_exists($manifestPath) && filesize($manifestPath) > 0) {
        $manifestExists = true;
    } elseif (file_exists($lowerManifestPath) && filesize($lowerManifestPath) > 0) {
        $manifestExists = true;
        $theme = strtolower($theme);
    } else {
        $manifestExists = false;
    }
    ?>

    @if($manifestExists)
        @vite(['themes/' . strtolower($theme) . '/css/app.css', 'themes/' . strtolower($theme) . '/js/app.js'], $theme)
    @else
        <link rel="stylesheet" href="/{{ $theme }}/assets/app-HiANTs8a.css">
        <script src="/{{ $theme }}/assets/app-DvN4n7f7.js" defer></script>
    @endif

    <!-- Complete inline CSS for the modern theme -->
    <style>
        [x-cloak] { display: none !important; }
        
        :root {
            --primary-color: #0095ff;
            --primary-dark: #0077e6;
            --primary-light: #33a9ff;
            --primary-gradient: linear-gradient(135deg, #0095ff, #0077e6);
            --background-color: #0d1117;
            --background-secondary-color: #161b22;
            --card-bg: #1a1f28;
            --text-color: #e6edf3;
            --text-muted: #8b949e;
            --border-color: #30363d;
            --success-color: #2ea043;
            --warning-color: #d29922;
            --danger-color: #f85149;
            --font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            --box-shadow: 0 4px 20px rgba(0, 0, 0, 0.25);
            --card-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            --border-radius: 0.5rem;
        }

        body {
            font-family: var(--font-family);
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.5;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Typography */
        h1, h2, h3, h4, h5, h6 {
            color: var(--text-color);
            font-weight: 600;
            margin-bottom: 1rem;
            letter-spacing: -0.025em;
        }

        h1 { font-size: 2.5rem; line-height: 1.2; }
        h2 { font-size: 2rem; line-height: 1.25; }
        h3 { font-size: 1.5rem; line-height: 1.3; }
        h4 { font-size: 1.25rem; line-height: 1.4; }
        h5 { font-size: 1.125rem; line-height: 1.4; }
        h6 { font-size: 1rem; line-height: 1.5; }

        p { margin-bottom: 1rem; }

        a {
            color: var(--primary-color);
            text-decoration: none;
            transition: color 0.2s, opacity 0.2s;
        }

        a:hover {
            color: var(--primary-light);
        }

        /* Layout */
        .container {
            width: 100%;
            max-width: 1280px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        /* Hero section */
        .hero {
            background: var(--card-bg);
            border-radius: var(--border-radius);
            padding: 4rem 2rem;
            margin-bottom: 3rem;
            text-align: center;
            border: 1px solid var(--border-color);
            box-shadow: var(--card-shadow);
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: radial-gradient(circle at top right, rgba(0,149,255,0.1), transparent 60%);
            z-index: 0;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            background: linear-gradient(to right, #fff, #cdf);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: relative;
            z-index: 1;
        }

        .hero p {
            font-size: 1.5rem;
            color: var(--text-muted);
            max-width: 680px;
            margin: 0 auto 2rem auto;
            position: relative;
            z-index: 1;
        }

        /* Cards */
        .card {
            background-color: var(--card-bg);
            border-radius: var(--border-radius);
            border: 1px solid var(--border-color);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: var(--card-shadow);
            position: relative;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
        }

        .card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--primary-gradient);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .card:hover::after {
            opacity: 1;
        }

        .card-body {
            padding: 1.75rem;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
        }

        .card-text {
            color: var(--text-muted);
            margin-bottom: 1.5rem;
        }

        /* Button styles */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 0.375rem;
            padding: 0.625rem 1.25rem;
            font-weight: 500;
            transition: all 0.2s;
            border: none;
            cursor: pointer;
            letter-spacing: 0.025em;
        }

        .btn-primary {
            background: var(--primary-gradient);
            color: white;
            box-shadow: 0 4px 12px rgba(0, 119, 255, 0.3);
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #33a9ff, #0077e6);
            box-shadow: 0 6px 16px rgba(0, 119, 255, 0.4);
            transform: translateY(-1px);
        }

        .btn-outline {
            background-color: transparent;
            border: 1px solid var(--border-color);
            color: var(--text-color);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .btn-outline:hover {
            background-color: rgba(255, 255, 255, 0.05);
            border-color: var(--primary-color);
            color: var(--primary-color);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
            transform: translateY(-1px);
        }

        /* Navigation */
        .navbar {
            background-color: rgba(22, 27, 34, 0.8);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border-color);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            height: 4rem;
            display: flex;
            align-items: center;
            box-shadow: 0 1px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--text-color);
            display: flex;
            align-items: center;
        }

        .navbar-logo {
            height: 2rem;
            margin-right: 0.5rem;
            filter: drop-shadow(0 0 2px rgba(0, 149, 255, 0.3));
        }

        .navbar-menu {
            display: flex;
            align-items: center;
            margin-left: 2rem;
        }

        .navbar-item {
            padding: 0.5rem 1rem;
            color: var(--text-muted);
            transition: color 0.2s;
            font-weight: 500;
        }

        .navbar-item:hover {
            color: var(--text-color);
        }

        /* Footer */
        .footer {
            background-color: var(--background-secondary-color);
            border-top: 1px solid var(--border-color);
            padding: 3rem 0;
            margin-top: 5rem;
        }

        .footer-title {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .footer-link {
            display: block;
            color: var(--text-muted);
            margin-bottom: 0.75rem;
            transition: color 0.2s, transform 0.2s;
            font-weight: 400;
        }

        .footer-link:hover {
            color: var(--primary-color);
            transform: translateX(3px);
        }

        .footer-bottom {
            margin-top: 2.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid var(--border-color);
            text-align: center;
            color: var(--text-muted);
            font-size: 0.875rem;
        }

        .footer-brand {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 500;
            color: var(--text-color);
        }

        .footer-logo {
            height: 2rem;
            width: auto;
            filter: drop-shadow(0 0 2px rgba(0, 149, 255, 0.3));
        }

        .footer-heading {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1.25rem;
            color: var(--text-color);
            position: relative;
            padding-bottom: 0.5rem;
        }

        .footer-heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 2rem;
            height: 2px;
            background: var(--primary-gradient);
        }

        .footer-social-link {
            color: var(--text-muted);
            transition: color 0.2s, transform 0.2s;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            background-color: rgba(30, 41, 59, 0.5);
            margin-right: 0.5rem;
        }

        .footer-social-link:hover {
            color: var(--primary-color);
            background-color: rgba(30, 41, 59, 0.8);
            transform: translateY(-3px);
        }

        /* Features section */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 4rem 0;
        }

        .feature {
            background-color: var(--card-bg);
            border-radius: var(--border-radius);
            padding: 1.75rem;
            border: 1px solid var(--border-color);
            box-shadow: var(--card-shadow);
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
            overflow: hidden;
        }

        .feature::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--primary-gradient);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .feature:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .feature:hover::before {
            opacity: 1;
        }

        .feature-icon {
            width: 3.5rem;
            height: 3.5rem;
            margin-bottom: 1.25rem;
            color: var(--primary-color);
            filter: drop-shadow(0 0 5px rgba(0, 149, 255, 0.3));
        }

        .feature-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
        }

        .feature-text {
            color: var(--text-muted);
        }

        /* FAQ section */
        .faq {
            margin: 4rem 0;
        }

        .faq-item {
            border: 1px solid var(--border-color);
            border-radius: var(--border-radius);
            margin-bottom: 1rem;
            overflow: hidden;
            transition: box-shadow 0.3s;
            box-shadow: var(--card-shadow);
        }

        .faq-item:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .faq-question {
            padding: 1.25rem;
            background-color: var(--card-bg);
            font-weight: 500;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-left: 3px solid transparent;
            transition: border-left-color 0.3s, background-color 0.3s;
        }

        .faq-question:hover {
            border-left-color: var(--primary-color);
            background-color: rgba(26, 31, 40, 0.8);
        }

        .faq-answer {
            padding: 1.25rem;
            background-color: rgba(22, 27, 34, 0.5);
            color: var(--text-muted);
            border-top: 1px solid var(--border-color);
        }

        /* Call to action section */
        .cta {
            background: linear-gradient(135deg, #0d1117, #1a1f28);
            border-radius: var(--border-radius);
            padding: 3rem 2rem;
            text-align: center;
            margin: 4rem 0;
            box-shadow: var(--card-shadow);
            position: relative;
            overflow: hidden;
        }

        .cta::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at center, rgba(0,149,255,0.1), transparent 70%);
            z-index: 0;
        }

        .cta h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            position: relative;
            z-index: 1;
        }

        .cta p {
            font-size: 1.125rem;
            color: var(--text-muted);
            max-width: 600px;
            margin: 0 auto 2rem auto;
            position: relative;
            z-index: 1;
        }

        /* Utility classes */
        .text-center { text-align: center; }
        .text-primary { color: var(--primary-color); }
        .text-success { color: var(--success-color); }
        .text-warning { color: var(--warning-color); }
        .text-danger { color: var(--danger-color); }
        .text-muted { color: var(--text-muted); }

        .bg-primary { background-color: var(--primary-color); }
        .bg-card { background-color: var(--card-bg); }
        .bg-success { background-color: var(--success-color); }
        .bg-warning { background-color: var(--warning-color); }
        .bg-danger { background-color: var(--danger-color); }
        .bg-background { background-color: var(--background-color); }
        .bg-background-secondary { background-color: var(--background-secondary-color); }

        /* Modern hover effects */
        .hover-lift {
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .hover-glow {
            transition: box-shadow 0.3s;
        }
        
        .hover-glow:hover {
            box-shadow: 0 0 15px rgba(0, 149, 255, 0.3);
        }

        .mt-1 { margin-top: 0.25rem; }
        .mt-2 { margin-top: 0.5rem; }
        .mt-4 { margin-top: 1rem; }
        .mt-6 { margin-top: 1.5rem; }
        .mt-8 { margin-top: 2rem; }
        .mt-12 { margin-top: 3rem; }
        .mt-16 { margin-top: 4rem; }
        .mt-auto { margin-top: auto; }
        
        .mb-1 { margin-bottom: 0.25rem; }
        .mb-2 { margin-bottom: 0.5rem; }
        .mb-4 { margin-bottom: 1rem; }
        .mb-6 { margin-bottom: 1.5rem; }
        .mb-8 { margin-bottom: 2rem; }
        .mb-12 { margin-bottom: 3rem; }
        .mb-16 { margin-bottom: 4rem; }
        
        .ml-1 { margin-left: 0.25rem; }
        .ml-2 { margin-left: 0.5rem; }
        .ml-3 { margin-left: 0.75rem; }
        .ml-4 { margin-left: 1rem; }
        
        .mr-1 { margin-right: 0.25rem; }
        .mr-2 { margin-right: 0.5rem; }
        .mr-3 { margin-right: 0.75rem; }
        .mr-4 { margin-right: 1rem; }
        
        .mx-auto { margin-left: auto; margin-right: auto; }
        
        .p-2 { padding: 0.5rem; }
        .p-4 { padding: 1rem; }
        .p-6 { padding: 1.5rem; }
        .p-8 { padding: 2rem; }
        
        .px-4 { padding-left: 1rem; padding-right: 1rem; }
        .px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
        .px-8 { padding-left: 2rem; padding-right: 2rem; }
        
        .py-2 { padding-top: 0.5rem; padding-bottom: 0.5rem; }
        .py-4 { padding-top: 1rem; padding-bottom: 1rem; }
        .py-6 { padding-top: 1.5rem; padding-bottom: 1.5rem; }
        .py-8 { padding-top: 2rem; padding-bottom: 2rem; }
        .py-12 { padding-top: 3rem; padding-bottom: 3rem; }

        .rounded { border-radius: 0.25rem; }
        .rounded-md { border-radius: 0.375rem; }
        .rounded-lg { border-radius: 0.5rem; }
        .rounded-full { border-radius: 9999px; }

        .shadow-sm { box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05); }
        .shadow { box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); }
        .shadow-lg { box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1); }
        .shadow-blue { box-shadow: 0 0 15px rgba(0, 119, 255, 0.3); }

        .flex { display: flex; }
        .flex-col { flex-direction: column; }
        .flex-row { flex-direction: row; }
        .flex-wrap { flex-wrap: wrap; }
        .flex-grow { flex-grow: 1; }
        .items-center { align-items: center; }
        .justify-center { justify-content: center; }
        .justify-between { justify-content: space-between; }
        .gap-1 { gap: 0.25rem; }
        .gap-2 { gap: 0.5rem; }
        .gap-4 { gap: 1rem; }
        .gap-8 { gap: 2rem; }

        .w-full { width: 100%; }
        .h-full { height: 100%; }
        .min-h-screen { min-height: 100vh; }

        .grid { display: grid; }
        .grid-cols-1 { grid-template-columns: repeat(1, minmax(0, 1fr)); }
        .grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        .grid-cols-3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
        .grid-cols-4 { grid-template-columns: repeat(4, minmax(0, 1fr)); }

        /* Responsive utilities */
        @media (min-width: 640px) {
            .sm\:grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .sm\:px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .md\:grid-cols-3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
            .md\:grid-cols-4 { grid-template-columns: repeat(4, minmax(0, 1fr)); }
            .md\:col-span-1 { grid-column: span 1 / span 1; }
            .md\:flex { display: flex; }
            .md\:flex-row { flex-direction: row; }
            .md\:hidden { display: none; }
            .md\:mt-0 { margin-top: 0; }
            .md\:ml-64 { margin-left: 16rem; }
        }

        @media (min-width: 1024px) {
            .lg\:grid-cols-3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
            .lg\:grid-cols-4 { grid-template-columns: repeat(4, minmax(0, 1fr)); }
            .lg\:px-8 { padding-left: 2rem; padding-right: 2rem; }
        }

        /* Border color */
        .border { border-width: 1px; }
        .border-t { border-top-width: 1px; }
        .border-b { border-bottom-width: 1px; }
        .border-neutral { border-color: var(--border-color); }
        .border-border-color { border-color: var(--border-color); }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }
        
        ::-webkit-scrollbar-track {
            background: var(--background-color);
        }
        
        ::-webkit-scrollbar-thumb {
            background: #2c313c;
            border-radius: 5px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #363c4a;
        }
    </style>
    
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

<body class="bg-background text-text-color min-h-screen flex flex-col antialiased" 
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