<?php

namespace App\Livewire\App\Settings;

use Livewire\Component;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Infolists\Concerns\InteractsWithInfolists;
use Filament\Infolists\Contracts\HasInfolists;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components as InfolistComponents;
use App\Models\Setting;

class Index extends Component implements HasForms, HasInfolists
{
    use InteractsWithInfolists;
    use InteractsWithForms;

    public function mainInfolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->state([
                'rates' => [
                    'hourly' => Setting::getValue('hourly_rates')
                ],
            ])
            ->schema([
                InfolistComponents\Tabs::make('Tabs')
                    ->tabs([
                        InfolistComponents\Tabs\Tab::make('Rates')
                            ->schema([
                                InfolistComponents\ViewEntry::make('rates')
                                    ->label('')
                                    ->view('infolists.components.settings.rates-tab')
                            ])
                    ])
            ]);
    }

    public function render()
    {
        return view('livewire.app.settings.index');
    }
}
