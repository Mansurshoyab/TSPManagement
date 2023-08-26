<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Batch extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'name',
    ];
    public function course():BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
    public function students():HasMany
    {
        return $this->hasMany(Student::class);
    }
}
