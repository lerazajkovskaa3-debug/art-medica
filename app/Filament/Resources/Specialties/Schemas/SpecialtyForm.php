<?php

namespace App\Filament\Resources\Specialties\Schemas;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class SpecialtyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                ->label('Название специальности')
                ->required(),
            ]);
    }
}
