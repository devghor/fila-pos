<?php

namespace App\Filament\Clusters\IdCard\Resources\IdCardRequisitions\Pages;

use App\Filament\Clusters\IdCard\Resources\IdCardRequisitions\IdCardRequisitionResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewIdCardRequisition extends ViewRecord
{
    protected static string $resource = IdCardRequisitionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
