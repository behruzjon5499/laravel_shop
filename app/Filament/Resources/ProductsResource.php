<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductsResource\Pages;
use App\Models\Category;
use App\Models\ProductData;
use App\Models\Products;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class ProductsResource extends Resource
{
    protected static ?string $model = Products::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name_ru')
                    ->required(),
                TextInput::make('name_uz')
                    ->required(),
                TextInput::make('name_en')
                    ->required(),
                TextInput::make('price'),
                DatePicker::make('date'),
                TextInput::make('type'),
                TextInput::make('description_ru'),
                TextInput::make('description_uz'),
                TextInput::make('description_en'),
                Forms\Components\Toggle::make('status')
                    ->hidden(($form->getOperation() === 'create')),
                Select::make('category_id')
                    ->label('Parent')
                    ->options(Category::all()->pluck('name_uz', 'id'))
                    ->searchable(),
                FileUpload::make('photo'),
//                RelationManager::make('data')
//                    ->fromModel(ProductData::class)
//                    ->label('Comments')
//                    ->relationship('comments')
//                    ->preview(fn ($data) => "{$data->id} - {$data->text}"), // Ko'rish uchun ma'lumotlar
//
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('name_ru')->sortable(),
                Tables\Columns\TextColumn::make('parent.name_uz')->sortable(),
                Tables\Columns\ToggleColumn::make('status')->sortable(),
                Tables\Columns\ImageColumn::make('photo'),
                Tables\Columns\TextColumn::make('created_at')->dateTime('Y-m-d')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->after(function (Category $record) {
                        if ($record->photo) {
                            Storage::disk('public')->delete($record->photo);
                        }
                    } ),
                Tables\Actions\ForceDeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\ForceDeleteBulkAction::make(),
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
            'create' => Pages\CreateProducts::route('/create'),
            'edit' => Pages\EditProducts::route('/{record}/edit'),
        ];
    }
}
