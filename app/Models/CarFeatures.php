<?php

namespace App\Models;

use App\Models\Car;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarFeatures extends Model
{
    //
    use HasFactory;
    public $timestamps = false;

    protected $primaryKey ='car_id';

    protected $fillable = [
        'car_id',
        'abs	air_conditioning',
        'power_windows',
        'power_door_locks',
        'bluetooth_connectivity',
        'gps_navigation',
        'climate_control'
    ];

    public function car():BelongsTo{
        return $this->belongsTo(Car::class);
    }
}
