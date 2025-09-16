<?php

namespace App\Filament\Resources\Uam\Users\Schemas;

use App\Enums\MediaCollection;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
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
                DateTimePicker::make('email_verified_at'),
                Select::make('roles')
                    ->multiple()
                    ->relationship('roles', 'name')
                    ->preload()
                    ->required(),
                TextInput::make('password')
                    ->password()
                    ->required(
                        fn (string $context): bool => $context === 'create',
                    ),
                TextInput::make('password_confirmation')
                    ->password()
                    ->same('password')
                    ->required(
                        fn (string $context): bool => $context === 'create',
                    ),
                // profile picture
                SpatieMediaLibraryFileUpload::make('profile_picture')
                    ->collection(MediaCollection::UserProfilePicture->value)
                    ->label('Profile Picture'),
            ]);
    }
}
