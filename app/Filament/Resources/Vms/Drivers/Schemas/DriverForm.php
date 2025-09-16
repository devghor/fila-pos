<?php

namespace App\Filament\Resources\Vms\Drivers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DriverForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->tel(),
                TextInput::make('license_number')
                    ->required(),
                TextInput::make('vehicle_type')
                    ->numeric(),
            ]);
    }
}
