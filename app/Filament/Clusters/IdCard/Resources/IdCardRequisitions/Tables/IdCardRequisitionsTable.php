<?php

namespace App\Filament\Clusters\IdCard\Resources\IdCardRequisitions\Tables;

use App\Enums\DivisionEnum;
use App\Enums\ReasonEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class IdCardRequisitionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('employee_name')
                    ->searchable(isIndividual: true, query: fn ($query, $search) => $query->orWhere('employee_name', 'like', "%{$search}%")),
                TextColumn::make('employee_id')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('division_id')
                    ->formatStateUsing(fn ($state) => $state ? DivisionEnum::options()[$state] : '-')
                    ->searchable()
                    ->label('Division'),
                TextColumn::make('reason')
                    ->formatStateUsing(fn ($state) => $state ? ReasonEnum::options()[$state] : '-')
                    ->searchable()
                    ->label('Reason'),
            ])
            ->filters(
                [
                    SelectFilter::make('division_id')
                        ->options(DivisionEnum::options()),
                    SelectFilter::make('reason')
                        ->multiple()
                        ->options(ReasonEnum::options()),
                    // created at filter
                    Filter::make('created_at')
                        ->schema([
                            DatePicker::make('created_at')
                                ->label('Created At'),
                        ])
                        ->query(function ($query, array $data) {
                            return $query
                                ->when(
                                    $data['created_at'],
                                    fn ($q) => $q->whereDate('created_at', $data['created_at'])
                                );
                        })
                        ->indicateUsing(function (array $data): ?string {
                            return $data['created_at']
                                ? 'Created on ' . \Carbon\Carbon::parse($data['created_at'])->toFormattedDateString()
                                : null;
                        }),
                ],
                layout: FiltersLayout::Modal,
                // layout: FiltersLayout::AboveContent,
                // layout: FiltersLayout::AboveContentCollapsible,
            )
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
