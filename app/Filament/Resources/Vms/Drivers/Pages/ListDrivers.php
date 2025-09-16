<?php

namespace App\Filament\Resources\Vms\Drivers\Pages;

use App\Filament\Resources\Vms\Drivers\DriverResource;
use App\Models\Vms\Driver;
use Filament\Actions\CreateAction;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;

class ListDrivers extends ListRecords
{
    protected static string $resource = DriverResource::class;


    protected string $view = 'filament.resources.vms.drivers.pages.list-drivers';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
