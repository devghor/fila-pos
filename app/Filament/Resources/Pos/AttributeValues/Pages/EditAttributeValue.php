<?php

namespace App\Filament\Resources\Pos\AttributeValues\Pages;

use App\Filament\Resources\Pos\AttributeValues\AttributeValueResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAttributeValue extends EditRecord
{
    protected static string $resource = AttributeValueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
