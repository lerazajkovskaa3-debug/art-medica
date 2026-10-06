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
}
