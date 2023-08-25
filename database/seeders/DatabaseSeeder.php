<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Course;
use App\Models\Fees;
use App\Models\Marks;
use App\Models\Modiul;
use App\Models\Student;
use App\Models\Trainer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Category::factory(10)->create();
        
        Trainer::factory(10)->create();

        Course::factory(10)->create();

        Modiul::factory(10)->create();

        Student::factory(10)->create();

        Fees ::factory(10)->create();

        Modiul::factory(10)->create();

        Marks::factory(10)->create();
    }
}
