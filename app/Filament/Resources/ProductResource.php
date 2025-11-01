<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';
    protected static ?string $navigationLabel = 'Products';
    protected static ?string $pluralModelLabel = 'Products';
    protected static ?string $modelLabel = 'Product';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // 🧭 Category Dropdown (Relationship)
                Forms\Components\Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->required(),

                // 🏷️ Product Name
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn($state, $set) => $set('slug', \Str::slug($state))),

                // 🔗 Slug
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->disabled()
                    ->dehydrated()
                    ->maxLength(255)
                    ->unique(Product::class, 'slug', ignoreRecord: true),

                // 🖼️ Image Upload
            FileUpload::make('images')
    ->label('Product Images')
    ->image()
    ->multiple()  // make it store as array
    ->directory('products')
    ->required(),


                // 🧾 Description
                Forms\Components\Textarea::make('description')
                    ->rows(3)
                    ->maxLength(1000)
                    ->columnSpanFull(),

                // 💵 Price
                Forms\Components\TextInput::make('price')
                    ->label('Price ($)')
                    ->numeric()
                    ->required()
                    ->prefix('$'),

                // 🔘 Toggles
                Forms\Components\Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),

                Forms\Components\Toggle::make('is_featured')
                    ->label('Featured')
                    ->default(false),

                Forms\Components\Toggle::make('in_stock')
                    ->label('In Stock')
                    ->default(true),

                Forms\Components\Toggle::make('on_sale')
                    ->label('On Sale')
                    ->default(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // 📂 Show Category Name Instead of ID
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Category')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->circular(),

                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('price')
                    ->money('usd')
                    ->sortable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),

                Tables\Columns\IconColumn::make('in_stock')
                    ->boolean()
                    ->label('Stock'),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
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
