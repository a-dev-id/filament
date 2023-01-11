<?php

namespace App\Filament\Resources\PopUpResource\Pages;

use App\Filament\Resources\PopUpResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPopUp extends EditRecord
{
    protected static string $resource = PopUpResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
