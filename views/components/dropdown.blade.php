<div x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false" class="relative">
    <div @click="open = !open">
        {{ $trigger }}
    </div>

    <div 
        x-show="open" 
        x-transition:enter="transition ease-out duration-200" 
        x-transition:enter-start="transform opacity-0 scale-95" 
        x-transition:enter-end="transform opacity-100 scale-100" 
        x-transition:leave="transition ease-in duration-75" 
        x-transition:leave-start="transform opacity-100 scale-100" 
        x-transition:leave-end="transform opacity-0 scale-95" 
        style="display: none;"
        class="panel-dropdown absolute z-50 mt-2 right-0 w-48 origin-top-right divide-y divide-neutral">
        {{ $content }}
    </div>
</div> 