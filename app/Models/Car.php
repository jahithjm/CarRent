<?php

namespace App\Models;

use App\Models\User;
use App\Models\Maker;
use App\Models\CarType;
use App\Models\CarImage;
use App\Models\FuelType;
use App\Models\CarFeatures;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Car extends Model
{
    //
    use HasFactory, SoftDeletes;
    public $timestamps = false;

    protected $fillable = [



    ];

    public function carType(): BelongsTo
    {
        return $this->belongsTo(CarType::class);
    }

    public function features(): HasOne
    {
        return $this->hasOne(CarFeatures::class, 'car_id');
    }

    public function primaryImage(): HasOne
    {
        return $this->hasOne(CarImage::class)->oldestOfMany('position');
    }

    public function images(): HasMany
    {
        return $this->hasMany(CarImage::class);

    }



    public function favoriteUser(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'favorite_cars', 'car_id', 'user_id')->withTimestamps();
    }

    public function fuelType(): BelongsTo
    {
        return $this->belongsTo(FuelType::class);

    }

    public function maker(): BelongsTo
    {
        return $this->belongsTo(Maker::class);
    }
    public function model(): BelongsTo
    {
        return $this->belongsTo(Models::class);
    }
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function city(): BelongsTo
    {
        return $this->belongsTo(Maker::class);
    }


}
