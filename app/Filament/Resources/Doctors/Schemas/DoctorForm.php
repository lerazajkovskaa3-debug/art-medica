<?php

namespace App\Filament\Resources\Doctors\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class DoctorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('phone')
                ->label('Телефон')
                    ->tel(),
                TextInput::make('email')
                    ->label('Email')
                    ->email(),
                Textarea::make('description')
                ->label('Описание')
                    ->columnSpanFull(),
                TextInput::make('last_name')
                ->label('Фамилия')
                ->required(),
                TextInput::make('first_name')
                ->label('Имя')
                ->required(),
                TextInput::make('middle_name')
                ->label('Отчество'),
            ]);
    }
}
