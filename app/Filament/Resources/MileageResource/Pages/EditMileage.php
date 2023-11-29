<?php

namespace App\Filament\Resources\MileageResource\Pages;

use App\Filament\Resources\MileageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMileage extends EditRecord
{
    protected static string $resource = MileageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
