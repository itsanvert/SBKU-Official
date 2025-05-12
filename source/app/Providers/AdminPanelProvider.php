<?php

namespace App\Filament\Resources;

use App\Models\Event;
use Filament\Resources\Resource;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\EditRecord;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;
    
    protected static ?string $navigationGroup = 'Blog';  // Ensure this matches the group
    protected static ?string $navigationIcon = 'heroicon-o-calendar';  // Optional icon
    protected static ?string $label = 'Event';

    public static function getPages(): array
    {
        return [
            'index' => ListRecords::route('/'),
            'create' => CreateRecord::route('/create'),
            'edit' => EditRecord::route('/{record}/edit'),
        ];
    }
    public function panel(Panel $panel): Panel
{
    return $panel
        ->resources([
            \App\Filament\Resources\EventResource::class,
        ])
        ->pages([
            // other pages
        ]);
}

}
