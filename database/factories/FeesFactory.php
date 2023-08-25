<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Fees;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fees>
 */
class FeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Fees::class;
    public function definition(): array
    {
        return [
            'student_id' => Student::factory()->create()->id,
            'course_id' => Course::factory()->create()->id,
            'transaction_id' => $this->faker->word, // You can adjust this based on your requirements
            'transaction_date' => $this->faker->date,
            'amount' => $this->faker->randomFloat(2, 10, 1000),
            'payment_method' => $this->faker->randomElement(['credit_card', 'paypal', 'bank_transfer']),
            'receipt_number' => $this->faker->word, 
        ];
    }
}
