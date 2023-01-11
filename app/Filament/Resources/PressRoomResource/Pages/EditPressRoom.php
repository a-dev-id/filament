<?php

namespace App\Filament\Resources\PressRoomResource\Pages;

use App\Filament\Resources\PressRoomResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPressRoom extends EditRecord
{
    protected static string $resource = PressRoomResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
