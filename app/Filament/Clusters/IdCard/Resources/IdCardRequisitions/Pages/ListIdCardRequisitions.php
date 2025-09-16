<?php

namespace App\Filament\Clusters\IdCard\Resources\IdCardRequisitions\Pages;

use App\Filament\Clusters\IdCard\Resources\IdCardRequisitions\IdCardRequisitionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListIdCardRequisitions extends ListRecords
{
    protected static string $resource = IdCardRequisitionResource::class;

    protected string $view = 'filament.clusters.id-card.id-card-requisitions.pages.list-id-card-requisitions';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
