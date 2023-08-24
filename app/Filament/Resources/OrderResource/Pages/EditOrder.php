<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrder extends EditRecord
{
    protected static string $resource = OrderResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\Action::make('print')->url(route('admin.orders.print', $this->record->id )),
            Actions\Action::make('download Pdf')->url(route('admin.orders.download', $this->record->id )),
        ];
    }
}
