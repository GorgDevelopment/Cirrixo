<div class="flex flex-col">
    <nav>
        <ul class="mt-4 space-y-2">
            @foreach (\App\Classes\Navigation::getLinks() as $nav)
                @if (isset($nav['children']) && count($nav['children']) > 0)
                    <li x-data="{ open: false }" class="pb-2">
                        <div @click="open = !open" class="text-sm font-medium text-base flex items-center justify-between p-2 rounded-md cursor-pointer hover:bg-neutral">
                            <span>{{ $nav['name'] }}</span>
                            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div x-show="open" class="mt-2 space-y-1 pl-5">
                            @foreach ($nav['children'] as $child)
                                <a href="{{ route($child['route'], $child['params'] ?? null) }}" class="text-sm text-base hover:text-primary p-2 block transition" {{ isset($child['spa']) && $child['spa'] ? 'wire:navigate' : '' }}>
                                    {{ $child['name'] }}
                                </a>
                            @endforeach
                        </div>
                    </li>
                @else
                    <li>
                        <a href="{{ route($nav['route'], $nav['params'] ?? null) }}" class="text-sm text-base hover:text-primary p-2 block transition rounded-md hover:bg-neutral" {{ isset($nav['spa']) && $nav['spa'] ? 'wire:navigate' : '' }}>
                            {{ $nav['name'] }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </nav>
    <div class="border-t border-neutral my-4"></div>
    <div class="space-y-2">
        <x-dropdown>
            <x-slot:trigger>
                <div class="text-sm font-medium text-base flex items-center p-2 rounded-md cursor-pointer hover:bg-neutral w-full">
                    <span>{{ strtoupper(app()->getLocale()) }} | {{ session('currency', config('settings.default_currency')) }}</span>
                </div>
            </x-slot:trigger>
            <x-slot:content>
                <strong class="block p-2 text-xs font-semibold uppercase text-base/50"> Language </strong>
                <livewire:components.language-switch />
                <livewire:components.currency-switch />
            </x-slot:content>
        </x-dropdown>
        
        <div class="flex items-center p-2 rounded-md hover:bg-neutral">
            <button x-on:click="darkMode = !darkMode" class="text-sm text-base font-medium w-full text-left">
                <span x-show="!darkMode">{{ __('Enable Dark Mode') }}</span>
                <span x-show="darkMode">{{ __('Enable Light Mode') }}</span>
            </button>
        </div>
    </div>
</div> 