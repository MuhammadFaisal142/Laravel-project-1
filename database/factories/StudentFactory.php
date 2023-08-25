<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
        'name'=>'Faisal',
        'age'=>'22',
        'address'=>'gujranwalal',
        'city'=>'gujranwalal',
        'phone'=>'254522245245',
        ];
    }
}
