<?php

namespace App\Filament\Clusters\IdCard\Resources\IdCardRequisitions\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class IdCardRequisitionInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('employee_name'),
                TextEntry::make('employee_id'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
