<?php

namespace App\Filament\Resources\Pos\Categories\Schemas;

use Filament\Schemas\Schema;

class CategoryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Infolists\Components\TextEntry::make('name_en')->label('Name (English)'),
                \Filament\Infolists\Components\TextEntry::make('name_bn')->label('Name (Bangla)'),
                \Filament\Infolists\Components\TextEntry::make('icon')->label('Icon'),
                \Filament\Infolists\Components\TextEntry::make('description')->label('Description'),
            ]);
    }
}
