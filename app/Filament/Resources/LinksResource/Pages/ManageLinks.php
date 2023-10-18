<?php

namespace App\Filament\Resources\LinksResource\Pages;

use App\Filament\Resources\LinksResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageLinks extends ManageRecords
{
    protected static string $resource = LinksResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
