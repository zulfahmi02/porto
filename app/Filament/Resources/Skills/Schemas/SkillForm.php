<?php

namespace App\Filament\Resources\Skills\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                FileUpload::make('icon_url')
                    ->image()
                    ->disk('public')
                    ->directory('skills')
                    ->required(),
                TextInput::make('category')
                    ->required()
                    ->default('Tools & Other'),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
