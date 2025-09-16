<?php

namespace App\Filament\Resources\List\ToDos;

use App\Filament\Resources\List\ToDos\Pages\CreateToDo;
use App\Filament\Resources\List\ToDos\Pages\EditToDo;
use App\Filament\Resources\List\ToDos\Pages\ListToDos;
use App\Filament\Resources\List\ToDos\Schemas\ToDoForm;
use App\Filament\Resources\List\ToDos\Tables\ToDosTable;
use App\Models\List\ToDo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ToDoResource extends Resource
{
    protected static ?string $model = ToDo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ToDoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ToDosTable::configure($table);
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
            'index' => ListToDos::route('/'),
            'create' => CreateToDo::route('/create'),
            'edit' => EditToDo::route('/{record}/edit'),
        ];
    }
}
