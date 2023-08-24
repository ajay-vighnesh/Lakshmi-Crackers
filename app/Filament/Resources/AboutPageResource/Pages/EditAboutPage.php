<?php

namespace App\Filament\Resources\AboutPageResource\Pages;

use App\Filament\Resources\AboutPageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutPage extends EditRecord
{
    protected static string $resource = AboutPageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
