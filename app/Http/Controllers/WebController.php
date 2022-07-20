<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //home
    public function aboutUs(){
        return view('about-us');
    }

    //form
    public function classesCreate(){
        return view('pages.forms.classes-forms.classes-create');
    }

    public function classesEdit(){
        return view('pages.forms.classes-forms.classes-edit');
    }

    public function studentEdit(){
        return view('pages.forms.student-forms.student-edit');
    }

    public function subjectCreate(){
        return view('pages.forms.subject-forms.subject-create');
    }

    public function subjectEdit(){
        return view('pages.forms.subject-forms.subject-edit');
    }

    public function scoreCreate(){
        return view('pages.forms.score-forms.score-create');
    }

    public function scoreEdit(){
        return view('pages.forms.score-forms.score-edit');
    }

    //table


    public function listSubject(){
        return view('pages.tables.listSubjects');
    }

    public function listScores(){
        return view('pages.tables.listScores');
    }
}
