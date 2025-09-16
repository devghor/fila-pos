<?php

namespace App\Filament\Resources\List\ToDos\Pages;

use App\Filament\Resources\List\ToDos\ToDoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListToDos extends ListRecords
{
    protected static string $resource = ToDoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
