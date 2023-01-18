<?php

namespace App\Filament\Resources\DayGuestResource\Pages;

use App\Filament\Resources\DayGuestResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDayGuest extends CreateRecord
{
    protected static string $resource = DayGuestResource::class;

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
