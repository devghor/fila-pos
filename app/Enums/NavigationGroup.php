<?php

namespace App\Enums;

enum NavigationGroup: string
{
    case OfficeServices = 'Office Services';
    case Settings = 'Settings';
    case Vms = 'VMS';
    case UserManagement = 'User Management';

    public function getIcon(): ?string
    {
        return match ($this) {
            self::Settings => 'heroicon-o-cog-6-tooth',
            self::Vms => 'heroicon-o-van',
            self::UserManagement => 'heroicon-o-users',
        };
    }
}
