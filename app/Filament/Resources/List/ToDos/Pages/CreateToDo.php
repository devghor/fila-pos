<?php

namespace App\Filament\Resources\List\ToDos\Pages;

use App\Filament\Resources\List\ToDos\ToDoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateToDo extends CreateRecord
{
    protected static string $resource = ToDoResource::class;
}
