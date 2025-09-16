<?php

namespace App\Filament\Resources\Uam\Users\Pages;

use App\Filament\Resources\Uam\Users\UserResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (is_null($data['password'])) {
            unset($data['password']);
            unset($data['password_confirmation']);
        }

        return $data;
    }
}
