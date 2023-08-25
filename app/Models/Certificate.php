<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'student_id',
        'grade',
        'issue_date',
        'issued_by',
        'category_id',
    ];

    public function course():BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
    public function student():BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
