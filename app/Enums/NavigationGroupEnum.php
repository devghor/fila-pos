<?php

namespace App\Enums;

use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum NavigationGroupEnum implements HasLabel, HasIcon
{
    case Dashboard;
    case Settings;


    public function getLabel(): string
    {
        return match($this) {
            self::Settings => 'Settings',
            self::Dashboard => 'Dashboard',
        };
    }

    public function getIcon(): string
    {
        return match($this) {
            self::Settings => 'heroicon-o-cog-6-tooth',
            self::Dashboard => 'heroicon-o-home',
        };
    }
}
