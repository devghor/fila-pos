<?php

namespace App\Filament\Pages\Tenancy;

use App\Models\Tenancy\Team;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Tenancy\RegisterTenant;
use Filament\Schemas\Schema;

class RegisterTeam extends RegisterTenant
{
    public static function getLabel(): string
    {
        return 'Register team';
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required(),
                TextInput::make('slug')
                    ->required()
                    ->regex('/^[a-z0-9-_]+$/')
                    ->helperText('Only lowercase letters, numbers, hyphens, and underscores allowed. No spaces.')
                    ->rule('lowercase'),
                Textarea::make('description')->nullable(),
            ]);
    }

    protected function handleRegistration(array $data): Team
    {
        $team = Team::create($data);

        $team->users()->attach(auth()->user());

        return $team;
    }
}
