<?php

namespace App\Filament\Resources\AboutPageResource\Pages;

use App\Filament\Resources\AboutPageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutPages extends ListRecords
{
    protected static string $resource = AboutPageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
