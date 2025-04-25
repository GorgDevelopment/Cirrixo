<footer class="text-base">
    <div class="container mx-auto px-4 lg:px-10">
        <div class="flex flex-col md:flex-row justify-between">
            <div class="flex flex-col gap-2 mb-6 md:mb-0">
                <span class="text-primary font-bold text-xl">{{ config('app.name') }}</span>
                <p class="text-base/70 text-sm">
                    {{ __('© :year :app_name. | All rights reserved.', ['year' => date('Y'), 'app_name' => config('app.name')]) }}
                </p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
                <div class="flex flex-col gap-2">
                    <h3 class="font-bold text-base">{{ __('navigation.footer.company') }}</h3>
                    <div class="flex flex-col gap-1">
                        <a href="{{ route('home') }}" class="text-sm text-base/70 hover:text-primary">
                            {{ __('navigation.home') }}
                        </a>
                        <a href="{{ route('tickets.create') }}" class="text-sm text-base/70 hover:text-primary">
                            {{ __('navigation.tickets') }}
                        </a>
                    </div>
                </div>
                
                <div class="flex flex-col gap-2">
                    <h3 class="font-bold text-base">{{ __('navigation.footer.products') }}</h3>
                    <div class="flex flex-col gap-1">
                        @foreach (App\Models\Category::limit(3)->get() as $category)
                            <a href="{{ route('category.show', ['category' => $category->slug]) }}" class="text-sm text-base/70 hover:text-primary">
                                {{ $category->name }}
                            </a>
                        @endforeach
                    </div>
                </div>
                
                <div class="flex flex-col gap-2 col-span-2 md:col-span-1">
                    <h3 class="font-bold text-base">{{ __('navigation.footer.legal') }}</h3>
                    <div class="flex flex-col gap-1">
                        <a href="https://paymenter.org" target="_blank" class="text-sm text-base/70 hover:text-primary group flex items-center gap-2">
                            <svg class="size-4 text-current group-hover:text-primary" width="150" height="205" viewBox="0 0 150 205" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1_17)">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 107V205H42.8571V139.638H100C133.333 139.638 150 123 150 89.7246V69.5L75 107V69.5L148.227 32.8863C143.133 10.9621 127.057 0 100 0H0V107ZM0 107V69.5L75 32V69.5L0 107Z"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_17">
                                        <rect width="150" height="205"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                            {{ __('Powered by') }} Paymenter
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> 