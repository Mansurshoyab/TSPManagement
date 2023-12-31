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
        'batch_id',
        'first_name',
        'last_name',
        'dob',
        'email',
        'phone',
        'address',
        'gender',
        'category_id',
        'admission_date',
        'status',
    ];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function fees(): HasMany
    {
        return $this->hasMany(Fees::class);
    }
    public function marks(): HasMany
    {
        return $this->hasMany(Marks::class);
    }
    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
    public function certificate(): HasMany
    {
        return $this->hasMany(Certificate::class);
    }
    public function modiul(): HasMany
    {
        return $this->hasMany(Modiul::class);
    }
    public function batch():BelongsTo
    {
        return $this->belongsTo(Batch::class);
    }
}
