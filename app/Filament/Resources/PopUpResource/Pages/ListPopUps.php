<?php

namespace App\Filament\Resources\PopUpResource\Pages;

use App\Filament\Resources\PopUpResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPopUps extends ListRecords
{
    protected static string $resource = PopUpResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
