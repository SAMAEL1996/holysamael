<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
    <div>
        @livewire('app.settings.rates-tab', [
                'rates' => $getState()
            ])
    </div>
</x-dynamic-component>
