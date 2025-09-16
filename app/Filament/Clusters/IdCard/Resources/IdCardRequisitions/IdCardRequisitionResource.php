<?php

namespace App\Filament\Clusters\IdCard\Resources\IdCardRequisitions;

use App\Filament\Clusters\IdCard\IdCardCluster;
use App\Filament\Clusters\IdCard\Resources\IdCardRequisitions\Pages\CreateIdCardRequisition;
use App\Filament\Clusters\IdCard\Resources\IdCardRequisitions\Pages\EditIdCardRequisition;
use App\Filament\Clusters\IdCard\Resources\IdCardRequisitions\Pages\ListIdCardRequisitions;
use App\Filament\Clusters\IdCard\Resources\IdCardRequisitions\Pages\ViewIdCardRequisition;
use App\Filament\Clusters\IdCard\Resources\IdCardRequisitions\Schemas\IdCardRequisitionForm;
use App\Filament\Clusters\IdCard\Resources\IdCardRequisitions\Schemas\IdCardRequisitionInfolist;
use App\Filament\Clusters\IdCard\Resources\IdCardRequisitions\Tables\IdCardRequisitionsTable;
use App\Models\IdCard\IdCardRequisition;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class IdCardRequisitionResource extends Resource
{
    protected static ?string $model = IdCardRequisition::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $cluster = IdCardCluster::class;

    public static function form(Schema $schema): Schema
    {
        return IdCardRequisitionForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return IdCardRequisitionInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return IdCardRequisitionsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListIdCardRequisitions::route('/'),
            'create' => CreateIdCardRequisition::route('/create'),
            'view' => ViewIdCardRequisition::route('/{record}'),
            'edit' => EditIdCardRequisition::route('/{record}/edit'),
        ];
    }
}
