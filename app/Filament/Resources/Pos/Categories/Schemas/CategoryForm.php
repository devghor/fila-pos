<?php

namespace App\Filament\Resources\Pos\Categories\Schemas;

use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->columnSpanFull()
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                    ])
                    ->schema([
                        \Filament\Forms\Components\TextInput::make('name_en')
                            ->label('Name (English)')
                            ->required(),
                        \Filament\Forms\Components\TextInput::make('name_bn')
                            ->label('Name (Bangla)')
                            ->required(),
                        \Filament\Forms\Components\TextInput::make('icon')
                            ->label('Icon')
                            ->nullable(),
                        \Filament\Forms\Components\Textarea::make('description')
                            ->label('Description')
                            ->nullable(),
                    ]),
            ]);
    }
}
