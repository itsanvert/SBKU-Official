<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DisplayResource\Pages;
use App\Filament\Resources\DisplayResource\RelationManagers;
use App\Models\Display;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Stephenjude\FilamentBlog\Traits\HasContentEditor;


class DisplayResource extends Resource
{
    use HasContentEditor;
    protected static ?string $model = Display::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
              Forms\Components\TextInput::make('title_kh')
                  ->label(__('Title'))
                  ->required()
                  ->columnSpan([
                        'lg' => 'full',
                        '2xl' => 2,
                    ])
                  ->reactive(),
              self::getContentEditor('Body Kh','body_kh'),
              Forms\Components\TextInput::make('title_en')
                  ->label(__('Title'))
                  ->required()
                  ->columnSpan([
                        'lg' => 'full',
                        '2xl' => 2,
                    ])
                  ->reactive(),
              self::getContentEditor('Body En','body_en'),
              Forms\Components\DatePicker::make('published_at')
                  ->label(__('filament-blog::filament-blog.published_date')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
              Tables\Columns\TextColumn::make('title_kh')
                  ->label(__('Title Kh'))
                  ->searchable()
                  ->sortable(),
                  Tables\Columns\TextColumn::make('title_en')
                      ->label(__('Title En'))
                      ->searchable()
                      ->sortable(),
              Tables\Columns\TextColumn::make('published_at')
                  ->label(__('filament-blog::filament-blog.published_at'))
                  ->date()
                  ->sortable(),
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
            'index' => Pages\ListDisplays::route('/'),
            'create' => Pages\CreateDisplay::route('/create'),
            'edit' => Pages\EditDisplay::route('/{record}/edit'),
        ];
    }
}
