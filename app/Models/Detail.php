<?php

namespace App\Models;

use App\Models\Mileage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = ['brand','model_name','model_year','factory_tested_mileage','total_rided_km','image'];
    
    public function mileage(){
        return $this->belongsTo(Mileage::class);
    }
}
