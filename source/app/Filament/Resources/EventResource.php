<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Models\Event;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Closure;
use Illuminate\Support\Str;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;
    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(fn (Closure $set, $state) => $set('slug', Str::slug($state)))
                            ->maxLength(255),
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255)
                            ->dehydrated()
                            ->disabled(),
                        Forms\Components\DatePicker::make('date')->required(),
                        Forms\Components\TimePicker::make('time')->required()->withoutSeconds(),
                        Forms\Components\TextInput::make('location')->required()->maxLength(255),
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->directory('events')
                            ->disk('public')
                            ->maxSize(2048)
                            ->nullable(),
                        Forms\Components\Textarea::make('description')->nullable()->maxLength(2000),
                        Forms\Components\Toggle::make('registration_required'),
                        Forms\Components\TextInput::make('max_participants')->numeric()->nullable(),
                        Forms\Components\DateTimePicker::make('registration_deadline')->nullable(),
                        Forms\Components\Textarea::make('schedule')->nullable(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->square(),
                Tables\Columns\TextColumn::make('title')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('date')->date()->sortable(),
                Tables\Columns\TextColumn::make('time')->sortable(),
                Tables\Columns\TextColumn::make('location')->searchable(),
                Tables\Columns\BooleanColumn::make('registration_required')->label('Registration Required'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('date')
                    ->label('Filter by Date')
                    ->options(
                        Event::query()
                            ->select('date')
                            ->distinct()
                            ->orderBy('date')
                            ->pluck('date', 'date')
                            ->toArray()
                    ),
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
