<?php

namespace Ab01faz101\IranProvinces\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    protected $fillable = [
        'province_id',
        'name',
    ];

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

}