<?php

namespace App\Filament\Resources\List\ToDos\Pages;

use App\Filament\Resources\List\ToDos\ToDoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditToDo extends EditRecord
{
    protected static string $resource = ToDoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
