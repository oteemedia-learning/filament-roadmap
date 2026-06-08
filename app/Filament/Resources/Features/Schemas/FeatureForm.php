<?php

namespace App\Filament\Resources\Features\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class FeatureForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('status')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('cost')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
            ]);
    }
}
