<?php

namespace App\Filament\Resources\Products;

use App\Filament\Resources\Products\Pages\CreateProduct;
use App\Filament\Resources\Products\Pages\EditProduct;
use App\Filament\Resources\Products\Pages\ListProducts;
use App\Filament\Resources\Products\Schemas\ProductForm;
use App\Filament\Resources\Products\Tables\ProductsTable;
use App\Models\Product;
use BackedEnum;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';
    protected static ?string $navigationLabel = 'Товары';
    
    protected static ?string $modelLabel = 'товар';
    
    protected static ?string $pluralModelLabel = 'Товары';

    public static function form(Schema $schema): Schema
    {        
        return $schema
        ->components([
            TextInput::make('title')
                    ->label('Название')
                    ->required()
                    ->maxLength(255),
            FileUpload::make('img_path') // Имя колонки в БД
                    ->label('Изображение')
                    ->disk('public')
                    ->image() // Разрешает загрузку только изображений
                    ->directory('products') // Папка в storage/app/public/products
                    ->imageEditor() // Встроенный редактор (по желанию)
                    ->maxSize(5120), // Максимальный размер 5 МБ
            Textarea::make('description')
                    ->label('Описание')
                    ->rows(3),
            TextInput::make('price')
                    ->label('Цена')
                    ->numeric()
                    ->prefix('₽')
                    ->default(0),
            Toggle::make('is_active')
                    ->label('Показывать на сайте')
                    ->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Название')
                    ->sortable(),
                TextColumn::make('price')
                    ->label('Цена')
                    ->money('RUB')
                    ->sortable(),
                ToggleColumn::make('is_active')
                    ->label('Показывать на сайте')
                    ->sortable(),
                 
            ])
            ->filters([
                SelectFilter::make('is_active')
                    ->label('Показывать на сайте')
                    ->options([
                        true => 'активные',
                        false => 'скрытые'
                    ]),
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
            'index' => ListProducts::route('/'),
            'create' => CreateProduct::route('/create'),
            'edit' => EditProduct::route('/{record}/edit'),
        ];
    }
}
