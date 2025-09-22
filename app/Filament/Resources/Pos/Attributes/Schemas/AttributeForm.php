<?php

namespace App\Filament\Resources\Pos\Attributes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AttributeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('handle')
                    ->required(),
            ]);
    }
}
