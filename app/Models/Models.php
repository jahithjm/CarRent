<?php

namespace App\Models;

use App\Models\Car;
use App\Models\Maker;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Models extends Model
{
    //
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];


    public function maker():BelongsTo{
        return $this->belongsTo(Maker::class);
    }
    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }
}
