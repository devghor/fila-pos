<?php

namespace App\Filament\Resources\Settings\Users;

use App\Enums\NavigationGroupEnum;
use App\Filament\Resources\Settings\Users\Pages\CreateUser;
use App\Filament\Resources\Settings\Users\Pages\EditUser;
use App\Filament\Resources\Settings\Users\Pages\ListUsers;
use App\Filament\Resources\Settings\Users\Pages\ViewUser;
use App\Filament\Resources\Settings\Users\Schemas\UserForm;
use App\Filament\Resources\Settings\Users\Schemas\UserInfolist;
use App\Filament\Resources\Settings\Users\Tables\UsersTable;
use App\Models\Settings\User;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    // protected static string|BackedEnum|null $navigationIcon = Heroicon::UserGroup;

    public static function form(Schema $schema): Schema
    {
        return UserForm::configure($schema);
    }

    public static function getNavigationGroup(): ?string
    {
        return NavigationGroupEnum::Settings->getLabel();
    }

    public static function infolist(Schema $schema): Schema
    {
        return UserInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UsersTable::configure($table);
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
            'index' => ListUsers::route('/'),
            'create' => CreateUser::route('/create'),
            'view' => ViewUser::route('/{record}'),
            'edit' => EditUser::route('/{record}/edit'),
        ];
    }
}
