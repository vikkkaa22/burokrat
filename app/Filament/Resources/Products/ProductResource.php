<?php

namespace App\Filament\Resources\Products;

use App\Filament\Resources\Products\Pages\CreateProduct;
use App\Filament\Resources\Products\Pages\EditProduct;
use App\Filament\Resources\Products\Pages\ListProducts;
use App\Filament\Resources\Products\Schemas\ProductForm;
use App\Filament\Resources\Products\Tables\ProductsTable;
use App\Models\Product;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {

        
        return $schema
        ->components([
            TextInput::make('title')
                    ->label('Название')
                    ->required()
                    ->maxLength(255),
            FileUpload::make('img_path') // Имя колонки в БД
                    ->label('Путь к картинке')
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
                    ->label('Показывать на слайде')
                    ->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return ProductsTable::configure($table);
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
