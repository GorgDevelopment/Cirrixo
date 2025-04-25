<div
    x-data="{ open: false }"
    @keydown.escape.stop="open = false"
    @click.away="open = false"
    class="relative"
>
    <div @click="open = !open">
        {{ $trigger }}
    </div>

    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute z-50 right-0 mt-2 rounded-md shadow-lg bg-background-secondary border border-neutral min-w-48"
        style="display: none"
    >
        <div class="py-1">
            {{ $content }}
        </div>
    </div>
</div> 