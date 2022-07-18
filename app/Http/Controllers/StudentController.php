<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function listStudents(){
        $students = Student::simplePaginate(5);
        return view("pages.tables.listStudents", [
            "students"=>$students
        ]);
    }
}
