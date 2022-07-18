<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class Student_SubjectsFactory extends Factory
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
            'studentID'=>$this->faker->randomElement($student),
            'subjectID'=>$this->faker->randomElement($subject)
        ];
    }
}
