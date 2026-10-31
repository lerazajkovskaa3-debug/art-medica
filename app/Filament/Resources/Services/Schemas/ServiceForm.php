<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Название услуги')
                    ->required(),

                Select::make('category_id')
                    ->label('Категория услуги')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                RichEditor::make('description')
                    ->label('Описание услуги')
                    ->columnSpanFull(),
            ]);
    }
}

