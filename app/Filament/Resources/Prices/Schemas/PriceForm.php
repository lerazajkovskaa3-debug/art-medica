<?php

namespace App\Filament\Resources\Prices\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PriceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('service_id')
                    ->label('Услуга')
                    ->relationship('service', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                TextInput::make('name')
                    ->label('Название варианта')
                    ->placeholder('Например: первичный приём')
                    ->maxLength(255),

                TextInput::make('price')
                    ->label('Стоимость')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(99999999.99)
                    ->step(0.01)
                    ->suffix('₽')
                    ->required(),

                TextInput::make('unit')
                    ->label('Единица')
                    ->placeholder('Например: за приём')
                    ->maxLength(255),
            ]);
    }
}

