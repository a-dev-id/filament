<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DayGuestResource\Pages;
use App\Filament\Resources\DayGuestResource\RelationManagers;
use App\Models\DayGuest;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DayGuestResource extends Resource
{
    protected static ?string $model = DayGuest::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('slug')
                    ->maxLength(191),
                Forms\Components\TextInput::make('subtitle')
                    ->maxLength(191),
                Forms\Components\Textarea::make('excerpt')
                    ->maxLength(65535),
                Forms\Components\Textarea::make('description'),
                Forms\Components\TextInput::make('banner_image')
                    ->maxLength(191),
                Forms\Components\Textarea::make('cover_image'),
                Forms\Components\TextInput::make('button_text')
                    ->maxLength(191),
                Forms\Components\TextInput::make('button_link')
                    ->maxLength(191),
                Forms\Components\TextInput::make('price')
                    ->maxLength(191),
                Forms\Components\TextInput::make('per')
                    ->maxLength(191),
                Forms\Components\TextInput::make('meta_title')
                    ->maxLength(191),
                Forms\Components\Textarea::make('meta_description')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('is_active')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('subtitle'),
                Tables\Columns\TextColumn::make('excerpt'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('banner_image'),
                Tables\Columns\TextColumn::make('cover_image'),
                Tables\Columns\TextColumn::make('button_text'),
                Tables\Columns\TextColumn::make('button_link'),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\TextColumn::make('per'),
                Tables\Columns\TextColumn::make('meta_title'),
                Tables\Columns\TextColumn::make('meta_description'),
                Tables\Columns\TextColumn::make('is_active'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
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
            'index' => Pages\ListDayGuests::route('/'),
            'create' => Pages\CreateDayGuest::route('/create'),
            'edit' => Pages\EditDayGuest::route('/{record}/edit'),
        ];
    }    
}
