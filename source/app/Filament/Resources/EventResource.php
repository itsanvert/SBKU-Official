<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn; // Added for ImageColumn

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                DatePicker::make('date') // changed from 'day' to 'date'
                    ->required(),
                TimePicker::make('time'),
                TextInput::make('location')
                    ->maxLength(255),
                Textarea::make('description')
                    ->rows(5),
                FileUpload::make('image')
                    ->image()
                    ->directory('events'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image'), // Column to display the image
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('date')->date()->sortable(), // changed from 'day' to 'date'
                TextColumn::make('time')
                    ->time() // Formats the time
                    ->sortable(),
                TextColumn::make('location')
                    ->sortable()
                    ->searchable(),
                
                // If you want to display a snippet of the description, you could add:
                // TextColumn::make('description')->limit(50)->tooltip(fn ($record) => $record->description),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}