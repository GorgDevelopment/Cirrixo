<div class="bg-[#0c1220] border-b border-[#1e293b]">
    <div class="flex justify-between items-center container mx-auto px-4 py-2">
        <!-- Left side: Logo and horizontal links -->
        <div class="flex items-center space-x-8">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center" wire:navigate>
                <div class="bg-[#00A8FF] w-8 h-8 rounded-sm mr-2"></div>
                <span class="text-white text-xl font-semibold">Cirrixo</span>
            </a>

            <!-- Navigation Links with white Services button -->
            <div class="hidden md:flex items-center space-x-2">
                <a href="{{ route('store') }}" class="bg-white text-[#0c1220] px-4 py-2 rounded font-medium text-sm" wire:navigate>Services</a>
                <a href="{{ route('knowledgebase') }}" class="text-gray-300 px-4 py-2 font-medium text-sm" wire:navigate>Knowledge Base</a>
                <a href="{{ route('faq') }}" class="text-gray-300 px-4 py-2 font-medium text-sm" wire:navigate>FAQ</a>
                <a href="{{ route('contact') }}" class="text-gray-300 px-4 py-2 font-medium text-sm" wire:navigate>Contact</a>
            </div>
        </div>

        <!-- Right side: Language selector and buttons -->
        <div class="flex items-center space-x-3">
            <!-- Language Selector -->
            <div class="hidden md:block border border-[#1e293b] rounded overflow-hidden">
                <button class="flex items-center justify-between bg-white text-[#0c1220] px-4 py-2 w-24">
                    <span>EN | EUR</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </div>

            <!-- Control Panel -->
            <div class="hidden md:block">
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" @click.away="open = false" class="bg-[#0c1220] border border-[#1e293b] text-white px-4 py-2 rounded flex items-center space-x-2">
                        <span>Panel</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" :class="{'rotate-180': open}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" class="absolute right-0 mt-2 w-48 bg-[#1a2433] border border-[#1e293b] shadow-lg rounded z-50" style="display: none;">
                        <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-gray-300 hover:bg-[#0c1220]" wire:navigate>Dashboard</a>
                        <a href="{{ route('orders.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-[#0c1220]" wire:navigate>My Services</a>
                        <a href="{{ route('tickets.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-[#0c1220]" wire:navigate>Support Tickets</a>
                    </div>
                </div>
            </div>
            
            <!-- Billing Area -->
            <div>
                <a href="{{ route('client') }}" class="bg-[#00A8FF] text-white px-4 py-2 rounded font-medium text-sm" wire:navigate>Billing Area</a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden" x-data="{ mobileMenuOpen: false }" @click="mobileMenuOpen = true">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                
                <!-- Mobile Menu -->
                <div x-show="mobileMenuOpen" 
                    @keydown.escape.window="mobileMenuOpen = false"
                    class="fixed inset-0 z-50 bg-[#0c1220] bg-opacity-95 flex items-center justify-center"
                    style="display: none;">
                    <div class="bg-[#1a2433] w-full max-w-sm mx-auto p-6 rounded border border-[#1e293b]">
                        <div class="flex justify-between items-center mb-6">
                            <div class="flex items-center">
                                <div class="bg-[#00A8FF] w-6 h-6 rounded-sm mr-2"></div>
                                <span class="text-white text-lg font-semibold">Cirrixo</span>
                            </div>
                            <button @click="mobileMenuOpen = false" class="text-gray-400 hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        
                        <nav class="space-y-4">
                            <a href="{{ route('store') }}" class="block py-2 text-white font-medium border-b border-[#1e293b] pb-3" wire:navigate>Services</a>
                            <a href="{{ route('knowledgebase') }}" class="block py-2 text-gray-300 hover:text-white" wire:navigate>Knowledge Base</a>
                            <a href="{{ route('faq') }}" class="block py-2 text-gray-300 hover:text-white" wire:navigate>FAQ</a>
                            <a href="{{ route('contact') }}" class="block py-2 text-gray-300 hover:text-white" wire:navigate>Contact</a>
                        </nav>
                        
                        <div class="border-t border-[#1e293b] my-6"></div>
                        
                        <div class="flex flex-col space-y-3">
                            <a href="{{ route('dashboard') }}" class="bg-[#1e293b] text-white px-4 py-2 rounded text-center" wire:navigate>Panel</a>
                            <a href="{{ route('client') }}" class="bg-[#00A8FF] text-white px-4 py-2 rounded text-center" wire:navigate>Billing Area</a>
                        </div>
                    </div>
                </div>
            </button>
        </div>
    </div>
</div> 