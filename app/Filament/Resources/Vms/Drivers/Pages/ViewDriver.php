<?php

namespace App\Filament\Resources\Vms\Drivers\Pages;

use App\Filament\Resources\Vms\Drivers\DriverResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewDriver extends ViewRecord
{
    protected static string $resource = DriverResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
