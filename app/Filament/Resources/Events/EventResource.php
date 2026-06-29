<?php

namespace App\Filament\Resources\Events;

use App\Filament\Resources\Events\Pages\CreateEvent;
use App\Filament\Resources\Events\Pages\EditEvent;
use App\Filament\Resources\Events\Pages\ListEvents;
use App\Filament\Resources\Events\Schemas\EventForm;
use App\Filament\Resources\Events\Tables\EventsTable;
use App\Models\Event;
use BackedEnum;
use Filament\Forms\Components\DatePicker;
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
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';
    protected static ?string $navigationLabel = 'События и новости';
    
    protected static ?string $modelLabel = 'события и новости';
    
    protected static ?string $pluralModelLabel = 'События и новости';

    public static function form(Schema $schema): Schema
    {
      return $schema
        ->components([
            TextInput::make('title')
                    ->label('Название')
                    ->required()
                    ->maxLength(255),
            TextInput::make('post_url')
                    ->label('Ссылка на соцсеть')
                    ->required()
                    ->maxLength(255),
            FileUpload::make('img_path') // Имя колонки в БД
                    ->label('Изображение')
                    ->image() // Разрешает загрузку только изображений
                    ->directory('events') // Папка в storage/app/public/events
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
            'index' => ListEvents::route('/'),
            'create' => CreateEvent::route('/create'),
            'edit' => EditEvent::route('/{record}/edit'),
        ];
    }
}
