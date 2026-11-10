<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'phone',
        'email',
        'description',
    ];

    public function specialties()
    {
        return $this->belongsToMany(Specialty::class)->withTimestamps();
    }

    public function educations()
    {
        return $this->hasMany(DoctorEducation::class);
    }
    
    public function services()
    {
        return $this->belongsToMany(Service::class, 'doctor_services')
            ->withTimestamps();
    }
}
