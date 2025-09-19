<?php

namespace App\Filament\Resources\Pos\Categories\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;

class CategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('name_en')->label('Name (English)')->searchable(),
                \Filament\Tables\Columns\TextColumn::make('name_bn')->label('Name (Bangla)')->searchable(),
                \Filament\Tables\Columns\TextColumn::make('icon')->label('Icon')->toggleable(isToggledHiddenByDefault: true),
                \Filament\Tables\Columns\TextColumn::make('description')->label('Description')->limit(40)->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
