<a href="{{ $href }}" {{ $attributes->merge(['class' => 'text-sm font-medium text-base hover:text-primary py-2 px-3 block whitespace-nowrap']) }} @if($spa ?? true) wire:navigate @endif>
    {{ $slot }}
</a> 