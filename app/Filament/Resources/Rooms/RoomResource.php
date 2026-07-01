<?php

namespace App\Filament\Resources\Rooms;

use App\Filament\Resources\Rooms\Pages\CreateRoom;
use App\Filament\Resources\Rooms\Pages\EditRoom;
use App\Filament\Resources\Rooms\Pages\ListRooms;
use App\Filament\Resources\Rooms\Schemas\RoomForm;
use App\Filament\Resources\Rooms\Tables\RoomsTable;
use App\Models\Room;
use BackedEnum;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class RoomResource extends Resource

{
    protected static ?string $model = Room::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';
    protected static ?string $navigationLabel = 'Комнаты музея';
    
    protected static ?string $modelLabel = 'Комнаты музея';
    
    protected static ?string $pluralModelLabel = 'Комнаты музея';

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
                    ->directory('rooms') // Папка в storage/app/public/events
                    ->imageEditor() // Встроенный редактор (по желанию)
                    ->maxSize(5120), // Максимальный размер 5 МБ
            Textarea::make('description')
                    ->label('Описание')
                    ->rows(3),
            DatePicker::make('published_at')
                ->label('Дата публикации'),
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
                TextColumn::make('published_at')
                    ->label('Дата')
                    ->dateTime()
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
            'index' => ListRooms::route('/'),
            'create' => CreateRoom::route('/create'),
            'edit' => EditRoom::route('/{record}/edit'),
        ];
    }
}
