<?php

namespace App\Http\Controllers;
use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function listStudents(Request $request){
//        $students = Student::simplePaginate(5);
//        $classTable = with(new Classes)->getTable();
//        $studentTable = with(new Student)->getTable();
//        $students = Student::leftJoin($classTable, $studentTable.".classID",'=',$classTable.".classID")
//        ->select($studentTable.'.*',$classTable.'.className  as className',$classTable.'.classRoom')
//            -> simplePaginate(10);
        $classList = Classes::all();
        $paramName = $request->get("name");
        $paramClassID = $request->get("classID");
        $paramFrom = $request->get("birthStart");
        $paramto = $request->get("birthEnd");
        $students = Student::StartDate($paramFrom)->EndDate($paramto)->ClassFilter($paramClassID)->Search($paramName)->with("classes")->simplePaginate(10);
        return view("pages.tables.listStudents", [
            "students"=>$students,
            "classList"=>$classList
        ]);
    }
}
