<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('img_path')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('description')
                    ->default(null),
                DatePicker::make('publication date')
                    ->required(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
