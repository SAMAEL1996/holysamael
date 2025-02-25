<?php

namespace App\Filament\App\Resources\GuestResource\Pages;

use App\Filament\App\Resources\GuestResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGuest extends CreateRecord
{
    protected static string $resource = GuestResource::class;

    protected static bool $canCreateAnother = false;
}
