<?php

namespace App\Filament\Widgets;

use App\Models\Detail;
use App\Models\Mileage;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;

class StatsOverview extends BaseWidget
{

    protected static ?string $pollingInterval = '15s';
    protected static ?int $sort = 2;
    
    protected function getStats(): array
    {
        $total_mileage = Mileage::sum('km');
        $fuel = Mileage::sum('fuel_filled');
        $average_mileage =($fuel !=0)?$total_mileage/Mileage::count('km'): 0;
        return [
            Stat::make('Total KM Rided',Mileage::pluck('rided_km')->last())->color('success'),

            Stat::make('Average Mileage of your bike in km',$average_mileage)->color('success')->chart(Mileage::pluck('km')->toArray()),
            
            Stat::make('Total Fuel in liters',Mileage::sum('fuel_filled'))
        ];
    }
}
