<?php

namespace App\Filament\App\Resources\GuestResource\Pages;

use App\Filament\App\Resources\GuestResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewGuest extends ViewRecord
{
    protected static string $resource = GuestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
