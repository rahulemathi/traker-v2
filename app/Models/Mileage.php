<?php

namespace App\Models;

use App\Models\Detail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mileage extends Model
{
    use HasFactory;

    protected $fillable = ['date','inital_km','rided_km','fuel_filled'];

    public function getMileageAttribute(){
        return number_format(($this->rided_km - $this->inital_km) / $this->fuel_filled);
    }
    
    public function details(){
        return $this->hasMany(Detail::class);
    }
}
