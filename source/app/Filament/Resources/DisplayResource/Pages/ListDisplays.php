<?php

namespace App\Filament\Resources\DisplayResource\Pages;

use App\Filament\Resources\DisplayResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDisplays extends ListRecords
{
    protected static string $resource = DisplayResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
