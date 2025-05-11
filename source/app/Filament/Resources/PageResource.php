<?php

namespace App\Filament\Resources;

use Filament\Forms\Components\SpatieTagsInput;
use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Stephenjude\FilamentBlog\Traits\HasContentEditor;
use App\Models\Author;
use App\Models\Category;
class PageResource extends Resource
{
  use HasContentEditor;

  protected static ?string $model = Page::class;

  protected static ?string $slug = 'blog/page';

  protected static ?string $recordTitleAttribute = 'title';

  protected static ?string $navigationGroup = 'Blog';

  protected static ?string $navigationIcon = 'heroicon-o-document-text';

  protected static ?int $navigationSort = 0;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
              Forms\Components\Card::make()
                  ->schema([
                      Forms\Components\TextInput::make('title_kh')
                          ->label(__('Title Khmer'))
                          ->required()
                          ->columnSpan([
                                'lg' => 'full',
                                '2xl' => 2,
                            ])
                          ->reactive(),
                      self::getContentEditor('Body Kh','body_kh'),
                      Forms\Components\TextInput::make('title_en')
                          ->label(__('Title English'))
                          ->required()
                          ->columnSpan([
                                'lg' => 'full',
                                '2xl' => 2,
                            ])
                          ->reactive(),
                      self::getContentEditor('Body En','body_en'),
                      self::getContentEditor('Photo','photos'),
                      Forms\Components\BelongsToSelect::make('blog_author_id')
                          ->label(__('filament-blog::filament-blog.author'))
                          ->relationship('author', 'name')
                          ->options(Author::all()->pluck('name', 'id'))
                          ->searchable()
                          ->required(),
                      Forms\Components\BelongsToSelect::make('blog_category_id')
                          ->label(__('filament-blog::filament-blog.category'))
                          ->relationship('category', 'name')
                          ->options(Category::all()->pluck('name', 'id'))
                          ->searchable()
                          ->required(),
                      Forms\Components\DatePicker::make('published_at')
                          ->label(__('filament-blog::filament-blog.published_date')),
                  ])
                  ->columns([
                      'sm' => 2,
                  ])
                  ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
              Tables\Columns\TextColumn::make('title_kh')
                  ->label(__('Title Khmer'))
                  ->searchable()
                  ->sortable(),
              Tables\Columns\TextColumn::make('title_en')
                  ->label(__('Title English'))
                  ->searchable()
                  ->sortable(),
              Tables\Columns\TextColumn::make('author.name')
                  ->label(__('filament-blog::filament-blog.author_name'))
                  ->searchable()
                  ->sortable(),
              Tables\Columns\TextColumn::make('category.name')
                  ->label(__('filament-blog::filament-blog.category_name'))
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
