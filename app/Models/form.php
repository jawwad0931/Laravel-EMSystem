<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    use HasFactory;

    protected $table = 'forms';

    protected $fillable =[
        'std_image',
        'first_name',
        'last_name',
        'father_name',
        'email',
        'class',
        'school_name',
        'phone',
        'city',
        'address',
        'age',
        'Dob',
        'gender',
        'agree',
    ];
}
