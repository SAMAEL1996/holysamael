<div>
    <form wire:submit="saveRates">
        {{ $this->form }}
        
        <div style="padding-top: 20px">
            <x-filament::button type="submit" wire:loading.class="disabled" class="mr-2">
                Save
            </x-filament::button>
        </div>
    </form>
    
    <x-filament-actions::modals />
</div>
