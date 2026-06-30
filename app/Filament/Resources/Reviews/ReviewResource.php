<?php

namespace App\Filament\Resources\Reviews;

use App\Filament\Resources\Reviews\Pages\CreateReview;
use App\Filament\Resources\Reviews\Pages\EditReview;
use App\Filament\Resources\Reviews\Pages\ListReviews;
use App\Filament\Resources\Reviews\Schemas\ReviewForm;
use App\Filament\Resources\Reviews\Tables\ReviewsTable;
use App\Models\Review;
use BackedEnum;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;

class ReviewResource extends Resource
{
    protected static ?string $model = Review::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'review';
    protected static ?string $navigationLabel = 'Отзывы';
    
    protected static ?string $modelLabel = 'отзывы';
    
    protected static ?string $pluralModelLabel = 'Отзывы';


    public static function form(Schema $schema): Schema
    {
        return $schema
        ->components([           
            FileUpload::make('img_path') // Имя колонки в БД
                    ->label('Изображение')
                    ->image() // Разрешает загрузку только изображений
                    ->directory('reviews') // Папка в storage/app/public/events
                    ->imageEditor() // Встроенный редактор (по желанию)
                    ->maxSize(5120), // Максимальный размер 5 МБ
            DatePicker::make('published_at')
                ->label('Дата отзыва'),
            Toggle::make('is_active')
                    ->label('Показывать на сайте')
                    ->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([   
                TextColumn::make('published_at')
                    ->label('Дата')
                    ->dateTime()
                    ->sortable(),
                ToggleColumn::make('is_active')
                    ->label('Показывать на сайте')
                    ->sortable(),
                 
            ])
            ->defaultSort('created_at', 'desc')
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
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
            'index' => ListReviews::route('/'),
            'create' => CreateReview::route('/create'),
            'edit' => EditReview::route('/{record}/edit'),
        ];
    }
}
