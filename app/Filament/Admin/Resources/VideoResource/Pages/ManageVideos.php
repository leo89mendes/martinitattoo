<?php

namespace App\Filament\Admin\Resources\VideoResource\Pages;

use App\Filament\Admin\Resources\VideoResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageVideos extends ManageRecords
{
    protected static string $resource = VideoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
