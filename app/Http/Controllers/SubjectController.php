<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function listSubject(Request $request) {
        $paramName = $request->get("name");
        $subject = Subject::Search($paramName)->simplePaginate(5);
        return view("pages.tables.listSubjects",[
                "subject"=>$subject
        ]);
    }

    public function subjectForm(){
        return view("pages.forms.subject-forms.subject-create");
    }

    public function subjectCreate(Request $request){
        Subject::create(
            [
                "subjectID"=>$request->get("subjectID"),
                "subjectName"=>$request->get("subjectName")
            ]
        );
        return redirect()->to("/subjects-list");
    }
}
