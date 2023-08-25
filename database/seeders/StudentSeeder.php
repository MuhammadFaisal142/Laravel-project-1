<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Student; // Make sure to import your Student model

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $studentData = [
                'name' => 'faisal',
                'email' => 'faisalsai56th@gmail.com',
            ];

            Student::create($studentData);
        }
    }
}
