<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user'; // Optional: use an icon that represents a user

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                
                TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                
                TextInput::make('password')
                    ->password()
                    ->maxLength(255)
                    ->dehydrateStateUsing(fn ($state) => bcrypt($state)) // Encrypt password before storing it
                    ->required(fn ($livewire) => $livewire instanceof Pages\CreateUser) // Password required only on creation
                    ->hidden(fn ($livewire) => $livewire instanceof Pages\EditUser), // Hide on edit
                
                TextInput::make('phone_number')
                    ->tel()
                    ->maxLength(20)
                    ->label('Phone Number'),

                Select::make('role_id')
                    ->relationship('role', 'name')
                    ->required()
                    ->label('Role'),

                // Optional: make read-only

                TextInput::make('remember_token')
                    ->maxLength(100)
                    ->disabled(), // Optional: make read-only
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->sortable()
                    ->label('ID'),
                
                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('Name'),

                TextColumn::make('email')
                    ->searchable()
                    ->sortable()
                    ->label('Email'),

                TextColumn::make('phone_number')
                    ->searchable()
                    ->sortable()
                    ->label('Phone Number'),

                TextColumn::make('role.name')
                    ->label('Role'),

               
            ])
            ->filters([
                // Add filters if needed
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Define relationships if needed, e.g., related orders, posts, etc.
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
