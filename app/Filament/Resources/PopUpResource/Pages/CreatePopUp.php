<?php

namespace App\Filament\Resources\PopUpResource\Pages;

use App\Filament\Resources\PopUpResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePopUp extends CreateRecord
{
    protected static string $resource = PopUpResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
