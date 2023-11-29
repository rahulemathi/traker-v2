<?php

namespace App\Filament\Widgets;

use App\Models\Mileage;
use Filament\Widgets\ChartWidget;

class Chart extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected static ?int $sort = 3;
    
    // protected int | string | array $columnSpan = 'full';

    protected function getData(): array
    {
        return [
            'datasets'=>[
                [
                    'label'=>'km',
                    'data'=>Mileage::pluck('rided_km')->toArray()
                ]
                ],
                'labels'=>Mileage::pluck('fuel_filled')->toArray()
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
