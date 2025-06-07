<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Str;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

        protected static ?string $navigationGroup = 'Контент';

        protected static ?string $pluralModelLabel = 'Товары';

        protected static ?string $modelLabel = 'Товар';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->label('Название продукта')
                ->live(onBlur: true)
                    ->afterStateUpdated(function (Set $set, $state) {
                        $set('product_slug', Str::slug($state));
                    })
                ->required(),
                TextInput::make('product_slug')
                ->label('URL продукта')
                ->disabled()
                    ->dehydrated()
                    ->unique(Product::class, 'product_slug', ignoreRecord: true)
                ->required(),
                TextInput::make('description')
                ->label('Описание продукта')
                ->required(),
                TextInput::make('price')
                ->label('Цена продукта')
                ->required(),
                FileUpload::make('image')
                ->label('Изображение продукта')
                ->required()
                ->image()
                ->directory('products'),
                Toggle::make('is_active')
                ->label('Активность продукта')
                ->required()
                ->default(true),
                Select::make('category_id')
                ->label('Категория продукта')
                ->relationship('category', 'name')
                ->preload()
                ->native(false)
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->label('Нзвание товара')
                ->searchable(),
                TextColumn::make('product_slug')
                ->label('URL продукта')
                ->sortable(),
                TextColumn::make('description')
                ->label('Описание продукта'),
                IconColumn::make('is_active')
                ->label('Активность продукта')
                ->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
