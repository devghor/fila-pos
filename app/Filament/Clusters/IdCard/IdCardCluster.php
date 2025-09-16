<?php

namespace App\Filament\Clusters\IdCard;

use App\Enums\NavigationGroup;
use BackedEnum;
use Filament\Clusters\Cluster;
use Filament\Support\Icons\Heroicon;
use UnitEnum;

class IdCardCluster extends Cluster
{
    protected static ?string $slug = 'office-services/id-card';

    protected static string | UnitEnum | null $navigationGroup = NavigationGroup::OfficeServices->value;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedSquares2x2;
}
