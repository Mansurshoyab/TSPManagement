<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Marks;
use App\Models\Modiul;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Marks>
 */
class MarksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Marks::class;
    public function definition(): array
    {
        return [
            'student_id' => Student::factory()->create()->id,
            'course_id' => Course::factory()->create()->id,
            'modiul_id' => Modiul::factory()->create()->id,
            'marks' => $this->faker->numberBetween(0, 10),
        ];
    }
}
