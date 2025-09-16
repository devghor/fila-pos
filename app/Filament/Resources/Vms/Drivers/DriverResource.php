<?php

namespace App\Filament\Resources\Vms\Drivers;

use App\Enums\NavigationGroup;
use App\Filament\Resources\Vms\Drivers\Pages\CreateDriver;
use App\Filament\Resources\Vms\Drivers\Pages\EditDriver;
use App\Filament\Resources\Vms\Drivers\Pages\ListDrivers;
use App\Filament\Resources\Vms\Drivers\Pages\ViewDriver;
use App\Filament\Resources\Vms\Drivers\Schemas\DriverForm;
use App\Filament\Resources\Vms\Drivers\Schemas\DriverInfolist;
use App\Filament\Resources\Vms\Drivers\Tables\DriversTable;
use App\Models\Vms\Driver;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class DriverResource extends Resource
{
    protected static ?string $model = Driver::class;

    protected static string | UnitEnum | null $navigationGroup = NavigationGroup::Vms->value;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return DriverForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return DriverInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DriversTable::configure($table);
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
            'index' => ListDrivers::route('/'),
            'create' => CreateDriver::route('/create'),
            'view' => ViewDriver::route('/{record}'),
            'edit' => EditDriver::route('/{record}/edit'),
        ];
    }
}
