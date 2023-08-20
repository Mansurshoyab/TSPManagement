<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'first_name',
        'last_name',
        'dob',
        'email',
        'phone',
        'address',
        'gender',
        'major',
        'admission_date',
    ];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function fees():HasMany
    {
        return $this->hasMany(Fees::class);
    }
    public function marks():HasMany
    {
        return $this->hasMany(Marks::class);
    }
    
}
