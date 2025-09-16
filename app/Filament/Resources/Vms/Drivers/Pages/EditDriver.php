<?php

namespace App\Filament\Resources\Vms\Drivers\Pages;

use App\Filament\Resources\Vms\Drivers\DriverResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditDriver extends EditRecord
{
    protected static string $resource = DriverResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
