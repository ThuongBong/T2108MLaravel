<?php

namespace Database\Factories;

use App\Models\Scores;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $student = Student::all()->pluck("studentID")->toArray();
        $subject = Subject::all()->pluck("subjectID")->toArray();
        return [
            'score'=>$this->faker->randomDigitNot(5),
            'result'=>$this->faker->word,
            'studentID'=>$this->faker->randomElement($student),
            'subjectID'=>$this->faker->randomElement($subject)
        ];
    }

}
