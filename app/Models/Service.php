<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    protected $fillable = [
        'name',
        'description',
        'category_id',
    ];

    public function category(): BelongsTo {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctor_services')
            ->withTimestamps();
    }

}
