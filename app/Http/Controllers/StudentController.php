<?php

namespace App\Http\Controllers;
use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function listStudents(){
//        $students = Student::simplePaginate(5);
//        $classTable = with(new Classes)->getTable();
//        $studentTable = with(new Student)->getTable();
//        $students = Student::leftJoin($classTable, $studentTable.".classID",'=',$classTable.".classID")
//        ->select($studentTable.'.*',$classTable.'.className  as className',$classTable.'.classRoom')
//            -> simplePaginate(10);
        $students = Student::with("classes")->simplePaginate(10);
        return view("pages.tables.listStudents", [
            "students"=>$students
        ]);
    }
}
