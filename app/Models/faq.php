<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faq extends Model
{
    use HasFactory;

    // Define the table associated with the model if not following naming conventions
    protected $table = 'faqs';

    // Specify the fillable fields
    protected $fillable = ['FAQ_Question', 'FAQ_Answer'];

}
