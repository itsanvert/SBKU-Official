<?php

namespace App\Filament\Resources\DisplayResource\Pages;

use App\Filament\Resources\DisplayResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDisplay extends EditRecord
{
    protected static string $resource = DisplayResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
