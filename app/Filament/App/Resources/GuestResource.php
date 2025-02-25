<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Forms\GuestForm;
use App\Filament\App\Resources\GuestResource\Pages;
use App\Filament\App\Resources\GuestResource\RelationManagers;
use App\Models\Guest;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns as TableColumns;
use Filament\Tables\Actions as TableActions;
use Filament\Support\Enums\ActionSize;
use Filament\Notifications\Notification;

class GuestResource extends Resource
{
    protected static ?string $model = Guest::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(GuestForm::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TableColumns\TextColumn::make('name')
                    ->label('Name')
                    ->searchable(),
                TableColumns\TextColumn::make('start_at')
                    ->label('Start At')
                    ->formatStateUsing(function($state, $record) {
                        return $record->start_at_carbon->format('h:i A');
                    })
                    ->description(function($state, $record) {
                        return $record->start_at_carbon->format('F d, Y');
                    }),
                TableColumns\TextColumn::make('user_in')
                    ->label('Check-in by')
                    ->formatStateUsing(function($state, $record) {
                        return $record->userIn->name;
                    }),
                TableColumns\TextColumn::make('discount')
                    ->label('Discount')
                    ->badge()
                    ->color(function($state, $record) {
                        return $state == 0 ? 'gray' : 'success';
                    })
                    ->formatStateUsing(function($state, $record) {
                        return $state == 0 ? 'No' : $state . '%';
                    }),
                TableColumns\TextColumn::make('total_time')
                    ->label('Total Time'),
                TableColumns\TextColumn::make('amount')
                    ->label('Amount'),
                TableColumns\TextColumn::make('end_at')
                    ->label('End At')
                    ->formatStateUsing(function($state, $record) {
                        return $record->end_at_carbon->format('h:i A');
                    })
                    ->description(function($state, $record) {
                        return $record->end_at_carbon->format('F d, Y');
                    })
                    ->toggleable(isToggledHiddenByDefault: true),
                TableColumns\TextColumn::make('user_out')
                    ->label('Check-out by')
                    ->formatStateUsing(function($state, $record) {
                        return $record->userOut->name;
                    })
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                TableActions\Action::make('end')
                    ->label('End Time')
                    ->requiresConfirmation()
                    ->button()
                    ->outlined()
                    ->color('danger')
                    ->size(ActionSize::Small)
                    ->action(function($record) {
                        $record->status = false;
                        $record->end_at = \Carbon\Carbon::now();
                        $record->user_out = auth()->user()->id;
                        $record->save();
                        
                        $record->calculateTotalTime();

                        $record->calculateAmount();

                        Notification::make()
                            ->title('Guest successfully ended.')
                            ->success()
                            ->send();

                        return $record;
                    })
                    ->visible(function($record) {
                        return $record->status;
                    })
            ])
            ->bulkActions([
                //
            ])
            ->recordUrl(null);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGuests::route('/'),
            'create' => Pages\CreateGuest::route('/create'),
            'view' => Pages\ViewGuest::route('/{record}'),
            'edit' => Pages\EditGuest::route('/{record}/edit'),
        ];
    }
}
