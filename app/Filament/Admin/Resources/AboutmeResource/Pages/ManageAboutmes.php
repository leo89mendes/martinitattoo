<?php

namespace App\Filament\Admin\Resources\AboutmeResource\Pages;

use App\Filament\Admin\Resources\AboutmeResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAboutmes extends ManageRecords
{
    protected static string $resource = AboutmeResource::class;

    protected function getHeaderActions(): array
    {
        return [
           // Actions\CreateAction::make()->label('Novo'),
        ];
    }
}
