<?php

namespace App\Filament\Resources\DetailResource\Pages;

use Filament\Actions;
use App\Models\Detail;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\DetailResource;

class ListDetails extends ListRecords
{
    protected static string $resource = DetailResource::class;

    protected function getHeaderActions(): array
    {
        $action = [];
        if($this->hasRows()){
        return [
          $action =   Actions\CreateAction::make(),
        ];
    }
    return $action;
    }

    protected function hasRows():bool{
        return Detail::count()===0;
    }
}
