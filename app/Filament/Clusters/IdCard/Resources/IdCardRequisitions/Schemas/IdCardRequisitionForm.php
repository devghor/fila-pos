<?php

namespace App\Filament\Clusters\IdCard\Resources\IdCardRequisitions\Schemas;

use App\Enums\MediaCollection;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class IdCardRequisitionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('employee_name')
                    ->required(),
                TextInput::make('employee_id')
                    ->required(),
                Select::make('division_id')
                    ->options([
                        1 => 'HR',
                        2 => 'IT',
                        3 => 'Finance',
                    ])
                    ->required(),
                Select::make('reason')
                    ->options([
                        1 => 'New ID Card',
                        2 => 'Replacement',
                        3 => 'Update Information',
                    ])
                    ->required(),

                SpatieMediaLibraryFileUpload::make('id_card_signature')
                    ->collection(MediaCollection::IdCardSignature->value)
                    ->label('ID Card Signature'),

            ]);
    }
}
