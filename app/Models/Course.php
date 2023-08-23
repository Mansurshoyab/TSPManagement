<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function trainer(): BelongsTo
    {
        return $this->belongsTo(Trainer::class);
    }

    public function modiul(): HasMany
    {
        return $this->hasMany(Modiul::class);
    }

    public function student(): HasMany
    {
        return $this->hasMany(Student::class);
    }
    public function fees(): HasMany
    {
        return $this->hasMany(Fees::class);
    }
    public function marks(): HasMany
    {
        return $this->hasMany(Marks::class);
    }
    public function batches(): HasMany
    {
        return $this->hasMany(Batch::class);
    }
    
}
