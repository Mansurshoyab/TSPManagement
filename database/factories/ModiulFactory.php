<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Modiul;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModiulFactory extends Factory
{
    protected $model = Modiul::class;

    public function definition()
    {
        return [
            'course_id' => Course::factory()->create()->id,
            'modiul_name' => $this->faker->words(2, true),
            'description' => $this->faker->paragraph(2),
        ];
    }
}
