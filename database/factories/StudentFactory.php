<?php

namespace Database\Factories;

use App\Models\Classes;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $classes = Classes::all()->pluck("classID")->toArray();
        return [
            'studentID' => "SV".$this->faker->randomNumber(),
            'studentName'=>$this->faker->firstName,
            'birthday'=>$this->faker->date('Y-m-d','now'),
            'classID'=>$this->faker->randomElement($classes)
        ];
    }
}
