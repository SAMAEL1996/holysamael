<?php

namespace App\Livewire\App\Settings;

use Livewire\Component;
use Filament\Forms\Components as FormComponents;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use App\Models\Setting;
use Filament\Notifications\Notification;

class RatesTab extends Component implements HasForms
{
    use InteractsWithForms;

    public $rates;
    
    public ?array $data = [];
    
    public function mount(): void
    {
        $this->form->fill([
            'hourly' => $this->rates['hourly'] ?? 0
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                FormComponents\TextInput::make('hourly')
                    ->required()
                    ->integer(),
            ])
            ->statePath('data');
    }

    public function saveRates(): void
    {
        $data = $this->form->getState();

        Setting::upsertValue('hourly_rates', $data['hourly']);

        Notification::make()
            ->title("Success")
            ->body('Rates Setting successfully updated.')
            ->success()
            ->send();
    }

    public function render()
    {
        return view('livewire.app.settings.rates-tab');
    }
}
