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

    <!-- Complete inline CSS for the theme -->
    <style>
        [x-cloak] { display: none !important; }
        
        :root {
            --primary-color: #0091ff;
            --primary-dark: #0077e0;
            --primary-light: #33a6ff;
            --background-color: #0d1117;
            --background-secondary-color: #161b22;
            --card-bg: #1c2128;
            --text-color: #e6edf3;
            --text-muted: #8b949e;
            --border-color: #30363d;
            --success-color: #2ea043;
            --warning-color: #d29922;
            --danger-color: #f85149;
            --font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
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
        }

        h1 { font-size: 2.25rem; line-height: 2.5rem; }
        h2 { font-size: 1.875rem; line-height: 2.25rem; }
        h3 { font-size: 1.5rem; line-height: 2rem; }
        h4 { font-size: 1.25rem; line-height: 1.75rem; }
        h5 { font-size: 1.125rem; line-height: 1.75rem; }
        h6 { font-size: 1rem; line-height: 1.5rem; }

        p { margin-bottom: 1rem; }

        a {
            color: var(--primary-color);
            text-decoration: none;
            transition: color 0.2s;
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
            background-color: var(--background-secondary-color);
            border-radius: 0.5rem;
            padding: 3rem 1.5rem;
            margin-bottom: 2rem;
            text-align: center;
            border: 1px solid var(--border-color);
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.25rem;
            color: var(--text-muted);
            max-width: 680px;
            margin: 0 auto 2rem auto;
        }

        /* Cards */
        .card {
            background-color: var(--card-bg);
            border-radius: 0.5rem;
            border: 1px solid var(--border-color);
            overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
        }

        .card-body {
            padding: 1.5rem;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
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
            padding: 0.5rem 1rem;
            font-weight: 500;
            transition: all 0.2s;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
        }

        .btn-outline {
            background-color: transparent;
            border: 1px solid var(--border-color);
            color: var(--text-color);
        }

        .btn-outline:hover {
            background-color: var(--background-secondary-color);
        }

        /* Navigation */
        .navbar {
            background-color: var(--background-secondary-color);
            border-bottom: 1px solid var(--border-color);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            height: 4rem;
            display: flex;
            align-items: center;
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
        }

        .navbar-item:hover {
            color: var(--text-color);
        }

        /* Footer */
        .footer {
            background-color: var(--background-secondary-color);
            border-top: 1px solid var(--border-color);
            padding: 2rem 0;
            margin-top: 4rem;
        }

        .footer-title {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .footer-link {
            display: block;
            color: var(--text-muted);
            margin-bottom: 0.5rem;
            transition: color 0.2s;
        }

        .footer-link:hover {
            color: var(--text-color);
        }

        .footer-bottom {
            margin-top: 2rem;
            padding-top: 1rem;
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
        }

        .footer-heading {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--text-color);
        }

        .footer-social-link {
            color: var(--text-muted);
            transition: color 0.2s;
        }

        .footer-social-link:hover {
            color: var(--primary-color);
        }

        /* Features section */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin: 3rem 0;
        }

        .feature {
            background-color: var(--card-bg);
            border-radius: 0.5rem;
            padding: 1.5rem;
            border: 1px solid var(--border-color);
        }

        .feature-icon {
            width: 3rem;
            height: 3rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .feature-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .feature-text {
            color: var(--text-muted);
        }

        /* FAQ section */
        .faq {
            margin: 3rem 0;
        }

        .faq-item {
            border: 1px solid var(--border-color);
            border-radius: 0.5rem;
            margin-bottom: 0.75rem;
            overflow: hidden;
        }

        .faq-question {
            padding: 1rem;
            background-color: var(--card-bg);
            font-weight: 500;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-answer {
            padding: 1rem;
            background-color: var(--background-secondary-color);
            color: var(--text-muted);
            border-top: 1px solid var(--border-color);
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

        .shadow-sm { box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05); }
        .shadow { box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); }
        .shadow-lg { box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); }

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