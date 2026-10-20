<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoctorEducation extends Model
{
    protected $table = 'doctor_education';

    protected $fillable = [
        'doctor_id',
        'institution',
        'specialty',
        'year',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctors::class);
    }
}
