<?php

namespace App\Filament\Resources\DailySaleResource\Pages;

use App\Filament\Resources\DailySaleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditDailySale extends EditRecord
{
    protected static string $resource = DailySaleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['staff_name'] = $this->record->staffIn->user->name;
    
        return $data;
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $old = $record->toArray();

        $record->update($data);

        $new = $record->toArray();

        if($data['error_staff_id']) {
            $staff = \App\Models\Staff::find($data['error_staff_id']);

            $staff->errors()->create([
                'staff_id' => $data['error_staff_id'],
                'subjectable_type' => get_class($record),
                'subjectable_id' => $record->id,
                'reason' => $data['reason'] ? $data['reason'] : null,
                'data' => json_encode([
                    'old' => $old,
                    'new' => $new
                ]),
            ]);
        }
    
        return $record;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('view', ['record' => $this->getRecord()]);
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Daily sale successfully updated.';
    }
}
