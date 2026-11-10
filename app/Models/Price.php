<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'service_id',
        'name',
        'price',
        'unit',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
