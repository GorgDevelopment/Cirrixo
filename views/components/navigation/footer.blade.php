<footer class="text-base">
    <div class="container mx-auto px-4 lg:px-10">
        <div class="flex flex-col md:flex-row justify-between">
            <div class="flex flex-col gap-2 mb-6 md:mb-0">
                <span class="text-primary font-bold text-xl">{{ config('app.name') }}</span>
                <p class="text-base/70 text-sm">
                    {{ __('navigation.footer.rights', ['year' => date('Y')]) }}
                </p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
                <div class="flex flex-col gap-2">
                    <h3 class="font-bold text-base">{{ __('navigation.footer.company') }}</h3>
                    <div class="flex flex-col gap-1">
                        @foreach (\App\Classes\Navigation::getFooterLinks('company') as $link)
                            <a href="{{ $link['url'] }}" class="text-sm text-base/70 hover:text-primary" target="{{ isset($link['target']) ? $link['target'] : '_self' }}">
                                {{ $link['name'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
                
                <div class="flex flex-col gap-2">
                    <h3 class="font-bold text-base">{{ __('navigation.footer.products') }}</h3>
                    <div class="flex flex-col gap-1">
                        @foreach (\App\Classes\Navigation::getFooterLinks('products') as $link)
                            <a href="{{ $link['url'] }}" class="text-sm text-base/70 hover:text-primary" target="{{ isset($link['target']) ? $link['target'] : '_self' }}">
                                {{ $link['name'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
                
                <div class="flex flex-col gap-2 col-span-2 md:col-span-1">
                    <h3 class="font-bold text-base">{{ __('navigation.footer.legal') }}</h3>
                    <div class="flex flex-col gap-1">
                        @foreach (\App\Classes\Navigation::getFooterLinks('legal') as $link)
                            <a href="{{ $link['url'] }}" class="text-sm text-base/70 hover:text-primary" target="{{ isset($link['target']) ? $link['target'] : '_self' }}">
                                {{ $link['name'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> 