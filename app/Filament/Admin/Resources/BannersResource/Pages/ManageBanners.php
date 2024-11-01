<?php

namespace App\Filament\Admin\Resources\BannersResource\Pages;

use App\Filament\Admin\Resources\BannersResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageBanners extends ManageRecords
{
    protected static string $resource = BannersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
