<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_name',
        'category_id',
        'trainer_id',
        'description',
        'course_duretion',
        'start_date',
        'end_date',
        'course_fee',
        'location',
    ];
}
