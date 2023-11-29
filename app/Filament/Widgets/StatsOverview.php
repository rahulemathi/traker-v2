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
        $total_mileage = Mileage::sum(DB::raw('inital_km + rided_km'));
        $fuel = Mileage::sum('fuel_filled');
        $average_mileage =($fuel !=0)?$total_mileage/Mileage::sum('fuel_filled') : 0;
        return [
            Stat::make('Total KM Rided',Detail::avg('total_rided_km'))->color('success'),

            Stat::make('Average Mileage of your bike in km',$average_mileage)->color('success')->chart(Mileage::pluck('rided_km')->toArray()),
            
            Stat::make('Total Fuel in liters',Mileage::sum('fuel_filled'))
        ];
    }
}
