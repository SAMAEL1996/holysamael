<?php

namespace App\Filament\App\Resources\GuestResource\Pages;

use App\Filament\App\Forms\GuestForm;
use App\Filament\App\Resources\GuestResource;
use App\Models\Guest;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Carbon\Carbon;
use Filament\Notifications\Notification;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListGuests extends ListRecords
{
    protected static string $resource = GuestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('add-new')
                ->label('Check-in Guest')
                ->modalHeading('Add New Guest')
                ->fillForm([
                    'start_at' => Carbon::now(),
                    'user_in' => auth()->user()->id,
                    'discount' => 0
                ])
                ->form(GuestForm::getForm())
                ->action(function($data) {
                    $data['status'] = true;
                    $guest = Guest::create($data);

                    Notification::make()
                        ->title('New guest successfully added.')
                        ->success()
                        ->send();

                    return $guest;
                })
                ->modalSubmitAction(function(Actions\StaticAction $action) {
                    $rates = \App\Models\Setting::getValue('hourly_rates');

                    return $rates ? $action->label('Save') : false;
                })
                ->modalCancelAction(function(Actions\StaticAction $action) {
                    $rates = \App\Models\Setting::getValue('hourly_rates');

                    return $rates ? $action->label('Cancel') : false;
                })
        ];
    }

    public function getTabs(): array
    {
        return [
            'ongoing' => Tab::make('On-going')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', true))
                ->badge(Guest::query()->where('status', true)->count()),
            'ended' => Tab::make('Ended')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', false))
        ];
    }

    public function getBreadcrumbs(): array
    {
        return [
            
        ];
    }
}
