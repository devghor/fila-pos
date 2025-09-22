<?php

namespace App\Filament\Resources\Pos\Attributes;

use App\Enums\NavigationGroupEnum;
use App\Filament\Resources\Pos\Attributes\Pages\CreateAttribute;
use App\Filament\Resources\Pos\Attributes\Pages\EditAttribute;
use App\Filament\Resources\Pos\Attributes\Pages\ListAttributes;
use App\Filament\Resources\Pos\Attributes\Schemas\AttributeForm;
use App\Filament\Resources\Pos\Attributes\Tables\AttributesTable;
use App\Models\Pos\Attribute;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AttributeResource extends Resource
{
    protected static ?string $model = Attribute::class;


    public static function getNavigationGroup(): ?string
    {
        return NavigationGroupEnum::Pos->getLabel();
    }

    public static function form(Schema $schema): Schema
    {
        return AttributeForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AttributesTable::configure($table);
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
            'index' => ListAttributes::route('/'),
            'create' => CreateAttribute::route('/create'),
            'edit' => EditAttribute::route('/{record}/edit'),
        ];
    }
}
