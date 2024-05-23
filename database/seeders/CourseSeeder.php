<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Students;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'name' => 'curso Info',          
            'price' => 5,
        ]);

        Course::create([
            'name' => 'curso Info',
            'price' => 5,
        ]);

        Course::create([
            'name' => 'curso Info',
            'price' => 5,
        ]);

        Course::create([
            'name' => 'curso Info',
            'price' => 5,
        ]);

        Course::create([
            'name' => 'curso Info',
            'price' => 5,
        ]);
    }
}
