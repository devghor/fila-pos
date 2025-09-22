<?php

namespace App\Filament\Resources\Pos\AttributeValues;

use App\Enums\NavigationGroupEnum;
use App\Filament\Resources\Pos\AttributeValues\Pages\CreateAttributeValue;
use App\Filament\Resources\Pos\AttributeValues\Pages\EditAttributeValue;
use App\Filament\Resources\Pos\AttributeValues\Pages\ListAttributeValues;
use App\Filament\Resources\Pos\AttributeValues\Schemas\AttributeValueForm;
use App\Filament\Resources\Pos\AttributeValues\Tables\AttributeValuesTable;
use App\Models\Pos\AttributeValue;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AttributeValueResource extends Resource
{
    protected static ?string $model = AttributeValue::class;

    public static function getNavigationGroup(): ?string
    {
        return NavigationGroupEnum::Pos->getLabel();
    }

    public static function form(Schema $schema): Schema
    {
        return AttributeValueForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AttributeValuesTable::configure($table);
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
            'index' => ListAttributeValues::route('/'),
            'create' => CreateAttributeValue::route('/create'),
            'edit' => EditAttributeValue::route('/{record}/edit'),
        ];
    }
}
