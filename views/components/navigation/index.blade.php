<nav class="navbar px-4 sm:px-6 lg:px-8">
    <div class="container flex items-center justify-between h-16">
        <!-- Logo and Brand -->
        <div class="flex items-center">
            <a href="{{ route('home') }}" class="navbar-brand" wire:navigate>
                @if(config('settings.logo'))
                    <img src="{{ Storage::url(config('settings.logo')) }}" alt="{{ config('app.name') }}" class="navbar-logo">
                @else
                    <svg class="navbar-logo" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="5" y="5" width="40" height="40" rx="3" stroke="currentColor" stroke-width="2" fill="var(--primary-color)" fill-opacity="0.2"/>
                        <path d="M25 15L15 25L25 35L35 25L25 15Z" stroke="currentColor" stroke-width="2" fill="var(--primary-color)"/>
                    </svg>
                @endif
                <span>{{ config('app.name') }}</span>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex navbar-menu ml-8">
                <!-- Services Dropdown -->
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" @click.away="open = false" class="navbar-item flex items-center">
                        Services
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
                        <a href="{{ route('home') }}" class="navbar-item block px-4 py-2" wire:navigate>
                            VPS Hosting
                        </a>
                        <a href="{{ route('home') }}" class="navbar-item block px-4 py-2" wire:navigate>
                            Dedicated Servers
                        </a>
                        <a href="{{ route('home') }}" class="navbar-item block px-4 py-2" wire:navigate>
                            Game Servers
                        </a>
                        <a href="{{ route('home') }}" class="navbar-item block px-4 py-2" wire:navigate>
                            Web Hosting
                        </a>
                    </div>
                </div>

                <!-- Regular Links -->
                <a href="{{ route('home') }}" class="navbar-item" wire:navigate>
                    Network
                </a>
                <a href="{{ route('home') }}" class="navbar-item" wire:navigate>
                    About Us
                </a>
                <a href="{{ route('home') }}" class="navbar-item" wire:navigate>
                    Contact
                </a>
            </div>
        </div>

        <!-- Right Side Navigation -->
        <div class="flex items-center">
            <!-- Language & Currency Selector -->
            <div class="hidden md:block relative mr-4" x-data="{ open: false }">
                <button @click="open = !open" @click.away="open = false" class="navbar-item flex items-center border border-border-color rounded px-2 py-1">
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

            <!-- Client Area Buttons -->
            <div class="flex items-center space-x-3">
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" @click.away="open = false" class="btn btn-outline">
                        Panel <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4 inline-block" :class="{'rotate-180': open}" viewBox="0 0 20 20" fill="currentColor">
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
                        <a href="{{ route('home') }}" class="navbar-item block px-4 py-2" wire:navigate>
                            Dashboard
                        </a>
                        <a href="{{ route('home') }}" class="navbar-item block px-4 py-2" wire:navigate>
                            My Services
                        </a>
                        <a href="{{ route('home') }}" class="navbar-item block px-4 py-2" wire:navigate>
                            Support Tickets
                        </a>
                    </div>
                </div>
                <a href="{{ route('home') }}" class="btn btn-primary" wire:navigate>
                    Billing Area
                </a>
            </div>

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
                            <!-- Mobile Services Menu -->
                            <div x-data="{ subMenuOpen: false }">
                                <button @click="subMenuOpen = !subMenuOpen" class="w-full flex justify-between items-center py-2 text-left font-medium">
                                    Services
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform" :class="{'rotate-180': subMenuOpen}" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div x-show="subMenuOpen" x-transition class="pl-4 mt-2 space-y-2" style="display: none;">
                                    <a href="{{ route('home') }}" class="block py-2 text-muted hover:text-text-color" wire:navigate>
                                        VPS Hosting
                                    </a>
                                    <a href="{{ route('home') }}" class="block py-2 text-muted hover:text-text-color" wire:navigate>
                                        Dedicated Servers
                                    </a>
                                    <a href="{{ route('home') }}" class="block py-2 text-muted hover:text-text-color" wire:navigate>
                                        Game Servers
                                    </a>
                                    <a href="{{ route('home') }}" class="block py-2 text-muted hover:text-text-color" wire:navigate>
                                        Web Hosting
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Mobile Regular Links -->
                            <a href="{{ route('home') }}" class="block py-2 font-medium" wire:navigate>
                                Network
                            </a>
                            <a href="{{ route('home') }}" class="block py-2 font-medium" wire:navigate>
                                About Us
                            </a>
                            <a href="{{ route('home') }}" class="block py-2 font-medium" wire:navigate>
                                Contact
                            </a>
                        </nav>
                        
                        <div class="border-t border-border-color my-6"></div>
                        
                        <div class="flex flex-col space-y-4">
                            <a href="{{ route('home') }}" class="btn btn-outline w-full" wire:navigate>
                                Panel
                            </a>
                            <a href="{{ route('home') }}" class="btn btn-primary w-full" wire:navigate>
                                Billing Area
                            </a>
                        </div>
                    </div>
                </div>
            </button>
        </div>
    </div>
</nav> 