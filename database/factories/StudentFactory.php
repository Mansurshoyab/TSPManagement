<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Student::class;
    public function definition(): array
    {
        return [
            'course_id' => Course::factory()->create()->id,
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'dob' => $this->faker->date,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'gender' => $this->faker->randomElement([0, 1]), // Assuming 0 is male and 1 is female
            'category_id' => Category::factory()->create()->id,
            'admission_date' => $this->faker->date,
            'status' => $this->faker->randomElement(['paid', 'due']),
        ];
    }
}
