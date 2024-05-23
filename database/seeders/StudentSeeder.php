<?php

namespace Database\Seeders;

use App\Models\Students;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Students::create([
            'name' => 'Arnau Salmeron',
            'email' => 'arnau@gmail.com',
            'birthdate' => '29/04/03',
            'course_id' => 1
        ]);

        Students::create([
            'name' => 'Ayoub',
            'email' => 'ayoub@gmail.com',
            'birthdate' => '12/03/06',
            'course_id' => 2
        ]);

        Students::create([
            'name' => 'Andres',
            'email' => 'andres@gmail.com',
            'birthdate' => '29/12/02',
            'course_id' => 3
        ]);

        Students::create([
            'name' => 'Marc',
            'email' => 'marc@gmail.com',
            'birthdate' => '19/02/03',
            'course_id' => 4
        ]);


        Students::create([
            'name' => 'Oscar',
            'email' => 'oscar@gmail.com',
            'birthdate' => '29/04/03',
            'course_id' => 2
        ]);


        Students::create([
            'name' => 'Ruben',
            'email' => 'ruben@gmail.com',
            'birthdate' => '21/04/03',
            'course_id' => 1
        ]);


        Students::create([
            'name' => 'Lucas',
            'email' => 'lucas@gmail.com',
            'birthdate' => '29/04/03',
            'course_id' => 3
        ]);


        Students::create([
            'name' => 'Jose',
            'email' => 'jsoe@gmail.com',
            'birthdate' => '29/04/03',
            'course_id' => 3
        ]);


        Students::create([
            'name' => 'Hector',
            'email' => 'hector@gmail.com',
            'birthdate' => '29/04/03',
            'course_id' => 2
        ]);

    }
}
