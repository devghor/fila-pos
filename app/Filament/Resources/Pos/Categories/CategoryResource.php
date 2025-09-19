<?php

namespace App\Filament\Resources\Pos\Categories;

use App\Enums\NavigationGroupEnum;
use App\Filament\Resources\Pos\Categories\Pages\CreateCategory;
use App\Filament\Resources\Pos\Categories\Pages\EditCategory;
use App\Filament\Resources\Pos\Categories\Pages\ListCategories;
use App\Filament\Resources\Pos\Categories\Pages\ViewCategory;
use App\Filament\Resources\Pos\Categories\Schemas\CategoryForm;
use App\Filament\Resources\Pos\Categories\Schemas\CategoryInfolist;
use App\Filament\Resources\Pos\Categories\Tables\CategoriesTable;
use App\Models\Pos\Category;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    public static function getNavigationGroup(): ?string
    {
        return NavigationGroupEnum::Pos->getLabel();
    }

    public static function form(Schema $schema): Schema
    {
        return CategoryForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CategoryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CategoriesTable::configure($table);
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
            'index' => ListCategories::route('/'),
            'create' => CreateCategory::route('/create'),
            'view' => ViewCategory::route('/{record}'),
            'edit' => EditCategory::route('/{record}/edit'),
        ];
    }
}
