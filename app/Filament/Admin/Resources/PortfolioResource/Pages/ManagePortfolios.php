<?php

namespace App\Filament\Admin\Resources\PortfolioResource\Pages;

use App\Filament\Admin\Resources\PortfolioResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePortfolios extends ManageRecords
{
    protected static string $resource = PortfolioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
