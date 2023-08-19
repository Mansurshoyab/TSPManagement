<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'description',
    ];

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
    public function student(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}
