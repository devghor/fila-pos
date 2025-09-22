<?php

namespace App\Filament\Resources\Pos\Attributes\Pages;

use App\Filament\Resources\Pos\Attributes\AttributeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAttribute extends CreateRecord
{
    protected static string $resource = AttributeResource::class;
}
