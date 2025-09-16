<?php

namespace App\Enums;

enum ReasonEnum: int
{
    case NewIdCard = 1;
    case Replacement = 2;
    case UpdateInformation = 3;

    public static function options(): array
    {
        return [
            self::NewIdCard->value => self::NewIdCard->name,
            self::Replacement->value => self::Replacement->name,
            self::UpdateInformation->value => self::UpdateInformation->name,
        ];
    }
}
