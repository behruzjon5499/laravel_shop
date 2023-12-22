<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SlidersResource\Pages;
use App\Models\News;
use App\Models\Sliders;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class SlidersResource extends Resource
{
    protected static ?string $model = Sliders::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title_ru')
                    ->required(),
                TextInput::make('title_uz')
                    ->required(),
                TextInput::make('title_en')
                    ->required(),
                FileUpload::make('photo'),
                TextInput::make('description_ru'),
                TextInput::make('description_uz'),
                TextInput::make('description_en'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_uz')->sortable(),
                Tables\Columns\ImageColumn::make('photo'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->after(function (Sliders $record) {
                        if ($record->photo) {
                            Storage::disk('public')->delete($record->photo);
                        }
                    } ),
                Tables\Actions\ForceDeleteAction::make(),
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
            'index' => Pages\ListSliders::route('/'),
            'create' => Pages\CreateSliders::route('/create'),
            'edit' => Pages\EditSliders::route('/{record}/edit'),
        ];
    }
}
