<nav class="navbar px-4 sm:px-6 lg:px-8">
    <div class="container flex items-center justify-between h-16">
        <!-- Logo and Brand -->
        <div class="flex items-center">
            <a href="{{ route('home') }}" class="navbar-brand" wire:navigate>
                @if(config('settings.logo'))
                    <img src="{{ Storage::url(config('settings.logo')) }}" alt="{{ config('app.name') }}" class="navbar-logo">
                @else
                    <svg class="navbar-logo" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25 5L5 15V35L25 45L45 35V15L25 5Z" stroke="currentColor" stroke-width="2" fill="var(--primary-color)"/>
                        <path d="M25 5V25M25 25V45M25 25L45 15M25 25L5 35" stroke="currentColor" stroke-width="2"/>
                    </svg>
                @endif
                <span>{{ config('app.name') }}</span>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex navbar-menu">
                @foreach (\App\Classes\Navigation::getLinks() as $nav)
                    @if (isset($nav['children']) && count($nav['children']) > 0)
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open" @click.away="open = false" class="navbar-item flex items-center">
                                {{ $nav['name'] }}
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" :class="{'rotate-180': open}" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div x-show="open" 
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95"
                                class="absolute left-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-card border border-border-color z-50"
                                style="display: none;">
                                @foreach ($nav['children'] as $child)
                                    <a href="{{ route($child['route'], $child['params'] ?? null) }}" class="navbar-item block px-4 py-2" {{ isset($child['spa']) && $child['spa'] ? 'wire:navigate' : '' }}>
                                        {{ $child['name'] }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <a href="{{ route($nav['route'], $nav['params'] ?? null) }}" class="navbar-item" {{ isset($nav['spa']) && $nav['spa'] ? 'wire:navigate' : '' }}>
                            {{ $nav['name'] }}
                        </a>
                    @endif
                @endforeach
            </div>
        </div>

        <!-- Right Side Navigation -->
        <div class="flex items-center">
            <!-- Language & Currency Selector -->
            <div class="hidden md:block relative" x-data="{ open: false }">
                <button @click="open = !open" @click.away="open = false" class="navbar-item flex items-center">
                    {{ strtoupper(app()->getLocale()) }} | {{ session('currency', config('settings.default_currency')) }}
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" :class="{'rotate-180': open}" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="open" 
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-card border border-border-color z-50"
                    style="display: none;">
                    <strong class="block p-2 text-xs font-semibold uppercase text-muted">{{ __('Language') }}</strong>
                    <livewire:components.language-switch />
                    <livewire:components.currency-switch />
                </div>
            </div>

            <!-- Theme Toggle -->
            <button x-on:click="darkMode = !darkMode" class="navbar-item flex items-center justify-center ml-2">
                <svg x-show="!darkMode" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 18C8.68629 18 6 15.3137 6 12C6 8.68629 8.68629 6 12 6C15.3137 6 18 8.68629 18 12C18 15.3137 15.3137 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16ZM11 1H13V4H11V1ZM11 20H13V23H11V20ZM3.51472 4.92893L4.92893 3.51472L7.05025 5.63604L5.63604 7.05025L3.51472 4.92893ZM16.9497 18.364L18.364 16.9497L20.4853 19.0711L19.0711 20.4853L16.9497 18.364ZM19.0711 3.51472L20.4853 4.92893L18.364 7.05025L16.9497 5.63604L19.0711 3.51472ZM5.63604 16.9497L7.05025 18.364L4.92893 20.4853L3.51472 19.0711L5.63604 16.9497ZM23 11V13H20V11H23ZM4 11V13H1V11H4Z"></path>
                </svg>
                <svg x-show="darkMode" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M10 7C10 10.866 13.134 14 17 14C18.9584 14 20.729 13.1957 21.9995 11.8995C22 11.933 22 11.9665 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C12.0335 2 12.067 2 12.1005 2.00049C10.8043 3.27105 10 5.04157 10 7ZM4 12C4 16.4183 7.58172 20 12 20C15.0583 20 17.7158 18.2839 19.062 15.7621C18.3945 15.9187 17.7035 16 17 16C12.0294 16 8 11.9706 8 7C8 6.29648 8.08133 5.60547 8.2379 4.938C5.71611 6.28423 4 8.9417 4 12Z"></path>
                </svg>
            </button>

            <!-- Cart -->
            <livewire:components.cart />

            <!-- User Menu -->
            @if(auth()->check())
                <div class="relative ml-3" x-data="{ open: false }">
                    <button @click="open = !open" @click.away="open = false" class="flex items-center">
                        <img src="{{ auth()->user()->avatar }}" alt="{{ auth()->user()->name }}" class="h-8 w-8 rounded-full border border-border-color">
                    </button>
                    <div x-show="open" 
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="opacity-0 scale-95"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95"
                        class="absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-card border border-border-color z-50"
                        style="display: none;">
                        <div class="flex flex-col p-2">
                            <span class="text-sm font-medium">{{ auth()->user()->name }}</span>
                            <span class="text-sm text-muted">{{ auth()->user()->email }}</span>
                        </div>
                        <div class="border-t border-border-color my-1"></div>
                        @foreach (\App\Classes\Navigation::getAccountDropdownLinks() as $nav)
                            <a href="{{ route($nav['route'], $nav['params'] ?? null) }}" class="navbar-item block px-4 py-2" {{ isset($nav['spa']) && $nav['spa'] ? 'wire:navigate' : '' }}>
                                {{ $nav['name'] }}
                            </a>
                        @endforeach
                        <div class="border-t border-border-color my-1"></div>
                        <livewire:auth.logout />
                    </div>
                </div>
            @else
                <div class="flex items-center space-x-3 ml-3">
                    <a href="{{ route('login') }}" class="navbar-item" wire:navigate>
                        {{ __('navigation.login') }}
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-primary" wire:navigate>
                        {{ __('navigation.register') }}
                    </a>
                </div>
            @endif

            <!-- Mobile Menu Button -->
            <button class="navbar-item md:hidden ml-3" x-data="{ mobileMenuOpen: false }" @click="mobileMenuOpen = true">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                
                <!-- Mobile Menu -->
                <div x-show="mobileMenuOpen" 
                    @keydown.escape.window="mobileMenuOpen = false"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90"
                    class="fixed inset-0 z-50 bg-background-color bg-opacity-90 flex items-center justify-center"
                    style="display: none;">
                    <div class="bg-card rounded-lg w-full max-w-sm mx-auto p-6 border border-border-color shadow-lg">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-xl font-bold">{{ config('app.name') }}</h2>
                            <button @click="mobileMenuOpen = false" class="text-muted hover:text-text-color">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        
                        <nav class="space-y-4">
                            @foreach (\App\Classes\Navigation::getLinks() as $nav)
                                @if (isset($nav['children']) && count($nav['children']) > 0)
                                    <div x-data="{ subMenuOpen: false }">
                                        <button @click="subMenuOpen = !subMenuOpen" class="w-full flex justify-between items-center py-2 text-left font-medium">
                                            {{ $nav['name'] }}
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform" :class="{'rotate-180': subMenuOpen}" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                        <div x-show="subMenuOpen" x-transition class="pl-4 mt-2 space-y-2" style="display: none;">
                                            @foreach ($nav['children'] as $child)
                                                <a href="{{ route($child['route'], $child['params'] ?? null) }}" class="block py-2 text-muted hover:text-text-color" {{ isset($child['spa']) && $child['spa'] ? 'wire:navigate' : '' }}>
                                                    {{ $child['name'] }}
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                @else
                                    <a href="{{ route($nav['route'], $nav['params'] ?? null) }}" class="block py-2 font-medium" {{ isset($nav['spa']) && $nav['spa'] ? 'wire:navigate' : '' }}>
                                        {{ $nav['name'] }}
                                    </a>
                                @endif
                            @endforeach
                        </nav>
                        
                        <div class="border-t border-border-color my-6"></div>
                        
                        <div class="flex flex-col space-y-4">
                            @if(auth()->check())
                                <span class="text-sm font-medium">{{ auth()->user()->name }}</span>
                                @foreach (\App\Classes\Navigation::getAccountDropdownLinks() as $nav)
                                    <a href="{{ route($nav['route'], $nav['params'] ?? null) }}" class="block py-2 text-muted hover:text-text-color" {{ isset($nav['spa']) && $nav['spa'] ? 'wire:navigate' : '' }}>
                                        {{ $nav['name'] }}
                                    </a>
                                @endforeach
                                <livewire:auth.logout />
                            @else
                                <a href="{{ route('login') }}" class="btn btn-outline w-full" wire:navigate>
                                    {{ __('navigation.login') }}
                                </a>
                                <a href="{{ route('register') }}" class="btn btn-primary w-full" wire:navigate>
                                    {{ __('navigation.register') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </button>
        </div>
    </div>
</nav> 