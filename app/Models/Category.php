<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
    public function certificate(): HasMany
    {
        return $this->hasMany(Certificate::class);
    }
}
