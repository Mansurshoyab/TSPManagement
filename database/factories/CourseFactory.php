<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Course;
use App\Models\Trainer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     */


    protected $model = Course::class;
    public function definition(): array
    {
        return [
            'course_name' => $this->faker->words(3, true),
            'category_id' => Category::factory()->create(),
            'trainer_id' => Trainer::factory()->create(),
            'description' => $this->faker->paragraph(2),
            'course_duretion' => $this->faker->word,
            'start_date' => $this->faker->dateTimeThisYear,
            'end_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'course_fee' => $this->faker->numberBetween(100, 1000),
            'location' => $this->faker->address,
        ];
    }
}
