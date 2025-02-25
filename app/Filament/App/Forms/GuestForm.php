<?php
namespace App\Filament\App\Forms;

use App\Models\Guest;
use App\Models\User;
use Filament\Forms\Components as FormComponents;
use Illuminate\Support\HtmlString;

class GuestForm
{
    public static function getForm()
    {
        return [
            FormComponents\Fieldset::make('')
                ->schema([
                    FormComponents\Placeholder::make('note')
                        ->label('')
                        ->content(new HtmlString('You cannot add a new guest at the moment. Please update your rates in <a href="' . route('filament.app.pages.settings') . '" style="color: rgba(251, 191, 36, 1)">Settings</a>.'))
                        ->columnSpan('full')
                ])
                ->visible(function() {
                    $rates = \App\Models\Setting::getValue('hourly_rates');

                    return !$rates;
                }),
            FormComponents\Grid::make(2)
                ->schema([
                    FormComponents\TextInput::make('name')
                        ->required(),
                    FormComponents\TextInput::make('contact_no')
                        ->label('Contact #')
                        ->placeholder('Optional'),
                    FormComponents\DateTimePicker::make('start_at')
                        ->label('Check-in At')
                        ->seconds(false)
                        ->native(false)
                        ->displayFormat('F d, Y h:i A')
                        ->required(),
                    FormComponents\Select::make('user_in')
                        ->label('Check-in By')
                        ->options(User::all()->pluck('name', 'id')->toArray())
                        ->native(false)
                        ->disabled()
                        ->dehydrated(),
                    FormComponents\Textarea::make('note')
                        ->rows(5)
                        ->columnSpan('full'),
                    FormComponents\TextInput::make('discount')
                        ->numeric()
                        ->suffix('%'),
                ])
                ->visible(function() {
                    $rates = \App\Models\Setting::getValue('hourly_rates');

                    return $rates;
                })
        ];
    }
}