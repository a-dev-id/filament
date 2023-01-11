<?php

namespace App\Filament\Resources\FacilityResource\Pages;

use App\Filament\Resources\FacilityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageFacilities extends ManageRecords
{
    protected static string $resource = FacilityResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
