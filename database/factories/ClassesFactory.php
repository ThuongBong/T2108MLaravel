<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClassesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "classID"=>'C'.$this->faker->randomNumber(),   //'C'.$this : noi chuoi
            "className"=>$this->faker->unique()->name,
            "classRoom"=>$this->faker->languageCode
        ];
    }
}
