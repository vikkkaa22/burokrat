<?php

namespace App\Filament\Resources\Faqs;

use App\Filament\Resources\Faqs\Pages\CreateFaq;
use App\Filament\Resources\Faqs\Pages\EditFaq;
use App\Filament\Resources\Faqs\Pages\ListFaqs;
use App\Filament\Resources\Faqs\Schemas\FaqForm;
use App\Filament\Resources\Faqs\Tables\FaqsTable;
use App\Models\Faq;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
class FaqResource extends Resource
{
    protected static ?string $model = Faq::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'question';
    protected static ?string $navigationLabel = 'Частые вопросы';
    
    protected static ?string $modelLabel = 'частые вопросы';
    
    protected static ?string $pluralModelLabel = 'Частые вопросы';

    public static function form(Schema $schema): Schema
    {
        return $schema
        ->components([
            Textarea::make('question')
                    ->label('Вопрос')
                    ->required()
                    ->rows(3),
            Textarea::make('answer')
                    ->label('Ответ')
                    ->required()
                    ->rows(3),
            Toggle::make('is_active')
                    ->label('Показывать на сайте')
                    ->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('question')
                    ->label('Вопрос')
                    ->sortable(),
                TextColumn::make('answer')
                    ->label('Ответ')
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
            'index' => ListFaqs::route('/'),
            'create' => CreateFaq::route('/create'),
            'edit' => EditFaq::route('/{record}/edit'),
        ];
    }
}
