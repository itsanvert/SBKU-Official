<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Components;
use Filament\Tables;
use Filament\Tables\Columns;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';
    protected static ?string $navigationGroup = 'Content';
    protected static ?string $slug = 'events';
    protected static ?string $navigationLabel = 'Events';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Components\Card::make()->schema([
                Components\TextInput::make('title')
                    ->label('Event Title')
                    ->required()
                    ->maxLength(255),

                Components\FileUpload::make('image')
                    ->label('Event Image')
                    ->image()
                    ->directory('events')
                    ->required()
                    ->disk('public'),

                Components\DatePicker::make('date')
                    ->label('Event Date')
                    ->required(),

                Components\TimePicker::make('time')
                    ->label('Event Time')
                    ->required(),

                Components\TextInput::make('location')
                    ->label('Location')
                    ->required()
                    ->maxLength(255),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->disk('public'),

                Columns\TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable(),

                Columns\TextColumn::make('date')
                    ->label('Date')
                    ->date()
                    ->sortable(),

                Columns\TextColumn::make('time')
                    ->label('Time')
                    ->sortable(),

                Columns\TextColumn::make('location')
                    ->label('Location')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\Filter::make('upcoming')
                    ->query(fn ($query) => $query->where('date', '>=', now()->toDateString())),
                Tables\Filters\Filter::make('past')
                    ->query(fn ($query) => $query->where('date', '<', now()->toDateString())),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
