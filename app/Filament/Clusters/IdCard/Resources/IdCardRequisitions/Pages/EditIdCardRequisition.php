<?php

namespace App\Filament\Clusters\IdCard\Resources\IdCardRequisitions\Pages;

use App\Filament\Clusters\IdCard\Resources\IdCardRequisitions\IdCardRequisitionResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditIdCardRequisition extends EditRecord
{
    protected static string $resource = IdCardRequisitionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
