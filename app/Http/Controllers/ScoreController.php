<?php

namespace App\Http\Controllers;

use App\Models\Scores;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;


class ScoreController extends Controller
{
    public function listScores(Request $request){
        $paramName = $request->get("name");
        $paramStudentID = $request->get("studentID");
        $paramSubjectID = $request->get("subjectID");

        $scores = Scores::StudentID($paramStudentID)->SubjectID($paramSubjectID)->Search($paramName)->simplePaginate(10);
        $students = Student::all();
        $subject = Subject::all();
        return view("pages.tables.listScores", [
            "scores"=>$scores,
            "students"=>$students,
            "subject"=>$subject
        ]);
    }

    public function scoreForm(){
        $studentList = Student::all();
        $subjectList = Subject::all();
        return view("pages.forms.score-forms.score-create",
            ["studentList" => $studentList],
            ["subjectList" => $subjectList]
        );
    }

    public function scoreCreate(Request $request){
        Scores::create(
            [
                "score"=>$request->get("score"),
                "result"=>$request->get("result"),
                "studentID"=>$request->get("studentID"),
                "subjectID"=>$request->get("subjectID")
            ]
        );
        return redirect()->to("/scores-list");
    }
}
