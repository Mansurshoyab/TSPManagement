<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Marks extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'course_id',
        'modiul_id',
        'marks',
    ];

    public function student():BelongsTo
    {
        return $this->belongsTo(Student::all());
    }
    public function course():BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
    public function modiul():BelongsTo
    {
        return $this->belongsTo(Modiul::class);
    }
}
