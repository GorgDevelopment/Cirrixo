<a href="{{ $href }}" {{ $attributes->merge(['class' => 'text-sm text-base p-2 hover:text-primary transition block']) }} {{ isset($spa) && $spa ? 'wire:navigate' : '' }}>
    {{ $slot }}
</a> 