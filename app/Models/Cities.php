<?php

namespace App\Models;

use App\Models\Car;
use App\Models\Provinces;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cities extends Model
{
    //
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'province_id',
        'name'
    ];

    public function cars():HasMany{
        return $this->hasMany(Car::class);
    }

    public function province():BelongsTo{
        return $this->belongsTo(Provinces::class);
    }
}
