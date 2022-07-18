<?php

namespace Database\Seeders;

use App\Models\Classes;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Scores;
use App\Models\Student_Subjects;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         User::factory(10)->create();
////        Classes::factory(10)->create();
//        Subject::factory(10)->create();
//        Student::factory(20)->create();
//        Scores::factory(20)->create();
        Student_Subjects::factory(20)->create();
    }
}
