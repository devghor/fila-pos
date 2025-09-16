<?php

namespace App\Enums;

enum DivisionEnum: int
{
    case HR = 1;
    case IT = 2;
    case Finance = 3;

    public static function options(): array
    {
        return [
            self::HR->value => self::HR->name,
            self::IT->value => self::IT->name,
            self::Finance->value => self::Finance->name,
        ];
    }
}
