<?php

namespace App\Filament\Resources\Doctors\RelationManagers;

use Filament\Actions\AssociateAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DissociateAction;
use Filament\Actions\DissociateBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EducationsRelationManager extends RelationManager
{
    protected static string $relationship = 'educations';
    protected static ?string $title = 'Образование';
    protected static ?string $modelLabel = 'запись об образовании';
    protected static ?string $pluralModelLabel = 'записи об образовании';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('institution')
                    ->label('Учебное заведение')
                    ->required()
                    ->maxLength(255),
                TextInput::make('specialty')
                    ->label('Специальность по образованию')
                    ->maxLength(255),
                TextInput::make('year')
                    ->label('Год окончания')
                    ->integer()
                    ->minValue(1900)
                    ->maxValue((int) date('Y')),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('institution')
            ->columns([
                TextColumn::make('institution')
                    ->label('Учебное заведение')
                    ->searchable(),
                TextColumn::make('specialty')
                    ->label('Специальность по образованию'),
                TextColumn::make('year')
                    ->label('Год окончания')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
