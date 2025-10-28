<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Textarea;
class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    public static function form(Form $form): Form
    {
        return $form
   ->schema([
                Group::make()->schema([
                    Forms\Components\TextInput::make('user_id')
                        ->numeric()
                        ->required()
                        ->label('Customer ID'),

                    Forms\Components\TextInput::make('grand_total')
                        ->required()
                        ->numeric()
                        ->default(0.00)
                        ->label('Grand Total (CAD)'),

                    Hidden::make('currency')->default('CAD'),

                    Hidden::make('payment_method')->default('e-transfer'),

                    Select::make('payment_status')
                        ->options([
                            'pending' => 'Pending',
                            'paid' => 'Paid',
                            'failed' => 'Failed',
                        ])
                        ->required()
                        ->default('pending'),

                    Forms\Components\TextInput::make('shipping_amount')
                        ->numeric()
                        ->default(0.00)
                        ->label('Shipping Amount'),

                    Forms\Components\TextInput::make('shipping_method')
                        ->default('Standard')
                        ->label('Shipping Method'),

                    Select::make('status')
                        ->options([
                            'new' => 'New',
                            'processing' => 'Processing',
                            'completed' => 'Completed',
                            'canceled' => 'Canceled',
                        ])
                        ->required()
                        ->default('new')
                        ->label('Order Status'),

                    Textarea::make('notes')->columnSpanFull()->label('Notes'),
                ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
              ->columns([
                TextColumn::make('user_id')->label('Customer ID')->sortable(),
                TextColumn::make('grand_total')->label('Grand Total (CAD)')->money('CAD')->sortable(),
                TextColumn::make('payment_status')->sortable(),
                TextColumn::make('shipping_amount')->label('Shipping')->sortable()->money('CAD'),
                TextColumn::make('shipping_method'),
                TextColumn::make('status')->sortable(),
                TextColumn::make('created_at')->dateTime()->sortable()->toggleable(),
                TextColumn::make('updated_at')->dateTime()->sortable()->toggleable(),
            ])
            ->filters([
                //
            ])
                ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make()->color('danger'),
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
