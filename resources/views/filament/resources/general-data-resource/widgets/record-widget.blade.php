<x-filament-widgets::widget>
    <x-filament::link href="{{ $action }}" class="w-full min-h-24 bg-neutral-900 rounded-lg" size="xs" color="gray">
        <div class="flex flex-row items-start">
            <div>
                <x-filament::icon
                    icon="heroicon-o-rectangle-stack"
                    class="h-6 w-6 text-gray-500 dark:text-gray-400"
                />
            </div>
            <div class="ms-2">
                <h2 class="text-xl font-bold">{{ $title }}</h2>
            </div>
        </div>
    </x-filament::link>
</x-filament-widgets::widget>
