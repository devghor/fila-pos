<?php

namespace App\Filament\Resources\Settings\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('name')
                            ->label("Name")
                            ->required()
                            ->maxLength(255),
                        TextInput::make('email')
                            ->label("Email")
                            ->email()
                            ->required()
                            ->maxLength(255),
                        TextInput::make('password')
                            ->label("Password")
                            ->password()
                            ->required(fn(string $context): bool => $context === 'create')
                            ->maxLength(255)
                            ->dehydrated(fn(string $context): bool => $context === 'create'),
                        TextInput::make('password_confirmation')
                            ->label("Confirm Password")
                            ->password()
                            ->required(fn(string $context): bool => $context === 'create')
                            ->maxLength(255)
                            ->dehydrated(false),
                    ]),
            ]);
    }
}
