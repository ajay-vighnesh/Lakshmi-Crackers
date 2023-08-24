<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSettings;
use Filament\Forms;
use Filament\Pages\SettingsPage;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;


class Settings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static string $settings = GeneralSettings::class;

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('global_discount')
            ->label('Global discount ')
            ->required(),
            
            TextInput::make('min_order_value')
            ->label('Min order value')
            ->required(),

            TextInput::make('starting_year')
            ->label('diwali sales starting year')
            ->required(),

            TextInput::make('company_name')
            ->label('Company Name')
            ->required(),

            TextInput::make('company_address')
            ->label('Company Address')
            ->required(),

            TextInput::make('mobile_number_1')
            ->label('Mobile Number 1')
            ->required(),
            TextInput::make('mobile_number_2')
            ->label('Mobile Number 2')
            ->required(),
            TextInput::make('mobile_number_3')
            ->label('Mobile Number 3')
            ->required(),
            TextInput::make('mobile_number_4')
            ->label('Mobile Number 4')
            ->required(),

            TextInput::make('mobile_number_5')
            ->label('Mobile Number 5')
            ->required(),

            Textarea::make('marquee_content')
            ->label('Marquee Content')
            ->required()
            ->maxLength(455),

        ];
    }
}
