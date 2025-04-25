<div>
    <!-- Hero Section -->
    <div class="relative mb-16">
        <div class="bg-background-secondary border border-neutral p-4 sm:p-8 rounded-lg">
            <div class="flex flex-col items-center text-center mb-8">
                <div class="inline-block bg-primary/10 text-primary px-4 py-1 rounded-full mb-4">
                    <span class="text-sm font-medium">Guaranteed DDoS Protection</span>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Premium Hosting Solutions</h1>
                <h2 class="text-2xl md:text-3xl font-bold text-primary mb-4">With Enterprise DDoS Protection</h2>
                <p class="text-base/70 max-w-3xl mx-auto mb-8">
                    High-performance servers with NVMe SSDs, enterprise-grade DDoS protection, and 24/7 expert technical support. Perfect for game servers, web hosting, and business applications.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('products') }}" wire:navigate>
                        <button class="bg-primary text-white hover:bg-primary/90 transition-colors duration-200 py-3 px-8 rounded-md font-medium w-full sm:w-auto">
                            View Our Services
                        </button>
                    </a>
                    <a href="{{ route('contact') }}" wire:navigate>
                        <button class="bg-background text-base hover:bg-background-secondary border border-neutral py-3 px-8 rounded-md font-medium w-full sm:w-auto">
                            Contact Sales
                        </button>
                    </a>
                </div>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mt-12">
                <div class="bg-background p-6 rounded-lg border border-neutral">
                    <div class="text-primary mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-1">High Performance</h3>
                    <p class="text-base/70 text-sm">Powered by Ryzen 7 5900x</p>
                </div>
                
                <div class="bg-background p-6 rounded-lg border border-neutral">
                    <div class="text-primary mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-1">DDoS Protection</h3>
                    <p class="text-base/70 text-sm">Up to 4 Tbps Mitigation</p>
                </div>
                
                <div class="bg-background p-6 rounded-lg border border-neutral">
                    <div class="text-primary mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-1">Ultra-Fast Storage</h3>
                    <p class="text-base/70 text-sm">NVMe SSDs For All Plans</p>
                </div>
                
                <div class="bg-background p-6 rounded-lg border border-neutral">
                    <div class="text-primary mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-1">24/7 Support</h3>
                    <p class="text-base/70 text-sm">Expert Technical Assistance</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Products/Categories Section -->
    <div class="mx-auto container rounded-md grid md:grid-cols-2 lg:grid-cols-4 gap-4 mb-16">
        @foreach ($categories as $category)
            <div class="flex flex-col bg-background-secondary hover:bg-background-secondary/80 border border-neutral p-4 rounded-lg">
                @if(theme('small_images', false))
                    <div class="flex gap-x-3 items-center">
                @endif
                @if ($category->image)
                    <img src="{{ Storage::url($category->image) }}" alt="{{ $category->name }}"
                        class="rounded-md {{ theme('small_images', false) ? 'w-14 h-fit' : 'w-full object-cover object-center' }}">
                @endif
                <h2 class="text-xl font-bold mt-3">{{ $category->name }}</h2>
                @if(theme('small_images', false))
                    </div>
                @endif
                @if(theme('show_category_description', true))
                    <article class="mt-2 prose dark:prose-invert">
                        {!! $category->description !!}
                    </article>
                @endif
                <a href="{{ route('category.show', ['category' => $category->slug]) }}" wire:navigate class="mt-3">
                    <button class="btn-primary w-full">
                        {{ __('general.view') }}
                    </button>
                </a>
            </div>
        @endforeach
    </div>

    <!-- Features Section -->
    <div class="mb-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Why Choose Us</h2>
            <p class="text-base/70 max-w-3xl mx-auto">
                We offer enterprise-grade infrastructure for businesses and gamers alike with a focus on performance, security, and reliability.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-background-secondary p-6 rounded-lg border border-neutral">
                <div class="text-primary mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">High-Performance Hardware</h3>
                <p class="text-base/70">
                    Latest AMD and Intel CPUs with NVMe SSD storage for blazing-fast performance in all our nodes.
                </p>
            </div>

            <div class="bg-background-secondary p-6 rounded-lg border border-neutral">
                <div class="text-primary mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Enterprise-Grade Security</h3>
                <p class="text-base/70">
                    Advanced DDoS protection with up to 10 Tbps of mitigation capacity across our global infrastructure.
                </p>
            </div>

            <div class="bg-background-secondary p-6 rounded-lg border border-neutral">
                <div class="text-primary mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Global Network</h3>
                <p class="text-base/70">
                    Premium Tier-1 providers with low-latency routes and multiple redundant connections for optimal reliability.
                </p>
            </div>

            <div class="bg-background-secondary p-6 rounded-lg border border-neutral">
                <div class="text-primary mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">24/7 Expert Support</h3>
                <p class="text-base/70">
                    Professional technical support team with decades of experience, available any time, any day.
                </p>
            </div>

            <div class="bg-background-secondary p-6 rounded-lg border border-neutral">
                <div class="text-primary mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Transparent Pricing</h3>
                <p class="text-base/70">
                    No hidden fees or surprise charges. Our straightforward pricing ensures you know exactly what you're paying for.
                </p>
            </div>

            <div class="bg-background-secondary p-6 rounded-lg border border-neutral">
                <div class="text-primary mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Scalable Solutions</h3>
                <p class="text-base/70">
                    From small game servers to large enterprise deployments, easily scale your resources as your needs grow.
                </p>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="mb-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-2">Frequently Asked Questions</h2>
            <p class="text-base/70">Find answers to common questions about our hosting services and infrastructure.</p>
        </div>

        <div class="max-w-4xl mx-auto space-y-4" x-data="{selected:null}">
            <div class="bg-background-secondary border border-neutral rounded-lg overflow-hidden">
                <h3 @click="selected !== 1 ? selected = 1 : selected = null" class="flex justify-between items-center p-4 cursor-pointer">
                    <span class="text-lg font-semibold">What is the difference between VPS and Dedicated hosting?</span>
                    <span class="text-primary">
                        <svg x-show="selected !== 1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        <svg x-show="selected === 1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                        </svg>
                    </span>
                </h3>
                <div x-show="selected === 1" x-transition class="p-4 pt-0 text-base/70 border-t border-neutral">
                    <p>A VPS (Virtual Private Server) is a virtualized server that shares physical hardware with other VPS instances, but operates independently with dedicated resources. Dedicated hosting provides an entire physical server exclusively for your use, offering maximum performance and complete control over hardware resources.</p>
                </div>
            </div>

            <div class="bg-background-secondary border border-neutral rounded-lg overflow-hidden">
                <h3 @click="selected !== 2 ? selected = 2 : selected = null" class="flex justify-between items-center p-4 cursor-pointer">
                    <span class="text-lg font-semibold">How reliable is your network uptime?</span>
                    <span class="text-primary">
                        <svg x-show="selected !== 2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        <svg x-show="selected === 2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                        </svg>
                    </span>
                </h3>
                <div x-show="selected === 2" x-transition class="p-4 pt-0 text-base/70 border-t border-neutral">
                    <p>We guarantee 99.9% network uptime through our redundant infrastructure, multiple Tier-1 carriers, and automated failover systems. Our network is monitored 24/7 to ensure optimal performance and availability.</p>
                </div>
            </div>

            <div class="bg-background-secondary border border-neutral rounded-lg overflow-hidden">
                <h3 @click="selected !== 3 ? selected = 3 : selected = null" class="flex justify-between items-center p-4 cursor-pointer">
                    <span class="text-lg font-semibold">What DDoS protection do you offer?</span>
                    <span class="text-primary">
                        <svg x-show="selected !== 3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        <svg x-show="selected === 3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                        </svg>
                    </span>
                </h3>
                <div x-show="selected === 3" x-transition class="p-4 pt-0 text-base/70 border-t border-neutral">
                    <p>We provide enterprise-grade DDoS protection with mitigation capacity up to 10 Tbps. Our multi-layered defense system includes traffic scrubbing, anomaly detection, and real-time mitigation against all types of DDoS attacks, including layer 3/4 volumetric attacks and layer 7 application-layer attacks.</p>
                </div>
            </div>

            <div class="bg-background-secondary border border-neutral rounded-lg overflow-hidden">
                <h3 @click="selected !== 4 ? selected = 4 : selected = null" class="flex justify-between items-center p-4 cursor-pointer">
                    <span class="text-lg font-semibold">Do I get full root/admin access to my server?</span>
                    <span class="text-primary">
                        <svg x-show="selected !== 4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        <svg x-show="selected === 4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                        </svg>
                    </span>
                </h3>
                <div x-show="selected === 4" x-transition class="p-4 pt-0 text-base/70 border-t border-neutral">
                    <p>Yes, all our VPS and dedicated server plans come with full root/administrator access, giving you complete control over your server environment. You can install any compatible software, configure your server as needed, and manage all aspects of your hosting environment.</p>
                </div>
            </div>

            <div class="bg-background-secondary border border-neutral rounded-lg overflow-hidden">
                <h3 @click="selected !== 5 ? selected = 5 : selected = null" class="flex justify-between items-center p-4 cursor-pointer">
                    <span class="text-lg font-semibold">What payment methods do you accept?</span>
                    <span class="text-primary">
                        <svg x-show="selected !== 5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        <svg x-show="selected === 5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                        </svg>
                    </span>
                </h3>
                <div x-show="selected === 5" x-transition class="p-4 pt-0 text-base/70 border-t border-neutral">
                    <p>We accept all major credit cards (Visa, Mastercard, American Express), PayPal, bank transfers, and various cryptocurrencies including Bitcoin, Ethereum, and more. Our flexible payment options ensure you can choose the method that works best for you.</p>
                </div>
            </div>
            
            <div class="text-center mt-8">
                <p class="text-base/70 mb-4">Have more questions?</p>
                <a href="{{ route('contact') }}" wire:navigate>
                    <button class="bg-primary text-white hover:bg-primary/90 transition-colors duration-200 py-2 px-6 rounded-md font-medium">
                        Contact Us
                    </button>
                </a>
            </div>
        </div>
    </div>

    {!! hook('pages.home') !!}
</div> 