<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use App\Models\Orderstatus;
use App\Models\Customer;
use App\Models\Address;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()
                ->schema([

                    Select::make('customer_id')
                        ->label('Customer')
                        ->options(Customer::all()->pluck('name', 'id'))
                        ->required()
                        ->searchable(),

                    // Forms\Components\TextInput::make('email')
                    //     ->required()
                    //     ->maxLength(255),

                    Select::make('email')
                        ->label('Email')
                        ->options(Customer::all()->pluck('email', 'id'))
                        ->searchable(),


                    Forms\Components\TextInput::make('discount_total')
                        ->required()
                        ->maxLength(255),

                    Forms\Components\TextInput::make('net_total')
                        ->required()
                        ->maxLength(255),

                    Forms\Components\TextInput::make('sub_total')
                        ->required()
                        ->maxLength(255),
                        

                    Select::make('address_id')
                        ->label('shipping address')
                        ->options(Address::all()->pluck('address', 'id'))
                        ->searchable(),

                    Select::make('address_id')
                        ->label(' city')
                        ->options(Address::all()->pluck('city_town', 'id'))
                        ->searchable(),

                    Select::make('address_id')
                        ->label(' district')
                        ->options(Address::all()->pluck('district', 'id'))
                        ->searchable(),

                    Select::make('address_id')
                        ->label(' Pin Code')
                        ->options(Address::all()->pluck('pin_code', 'id'))
                        ->searchable(),
                    
                        Select::make('mobile_number')
                        ->label('Mobile Number')
                        ->options(Customer::all()->pluck('mobile_number','mobile_number'))
                        ->searchable(),
                    
                        Select::make('whatsapp_number')
                        ->label('Whatsapp Number')
                        ->options(Customer::all()->pluck('whatsapp_number'))
                        ->searchable(),

                        // Forms\Components\TextInput::make('mobile_number')
                        // ->required()
                        // ->maxLength(255),

                        // Forms\Components\TextInput::make('customer.whatsapp_number')
                        // ->required()
                        // ->maxLength(255),

                ])->columns(2)


                ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('customer.name')->toggleable(),
                Tables\Columns\TextColumn::make('customer.email')->label('email')->toggleable(),
                Tables\Columns\TextColumn::make('net_total')->toggleable(),
                Tables\Columns\TextColumn::make('discount_total')->toggleable(),
                Tables\Columns\TextColumn::make('sub_total')->toggleable(),
                Tables\Columns\TextColumn::make('address.address')->toggleable(),
                Tables\Columns\TextColumn::make('address.city_town')->toggleable(),
                Tables\Columns\TextColumn::make('customer.mobile_number')->label('Mobile Number')->toggleable(),
                Tables\Columns\TextColumn::make('customer.whatsapp_number')->label('Whatsapp Number')->toggleable(),
            ])
            ->filters([
                //
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
        return [
            RelationManagers\ItemsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            // 'view' => Pages\ViewOrder::route('/{record}'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
