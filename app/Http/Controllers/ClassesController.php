<?php

namespace App\Http\Controllers;
use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public  function  listClasses(Request $request) {
//        $classes = Classes::all();
//        dd($classes);
//        $classes = Classes::orderBy("name","asc")
//            ->select('cid', 'name', 'room')
//            ->limit(5)
//            ->skip(5)
//            ->get(); api
        $paramName = $request->get("sName");
        $classes = Classes::Search($paramName)->withCount("students")->simplePaginate(5);
        return view("pages.tables.listClasses", [
            "classes"=>$classes
        ]);
    }

    public function classesForm() {
        return view("pages.forms.classes-forms.classes-create");
    }
    public function classesCreate(Request $request) {
        Classes::create(
            [
                "classID"=>$request->get("classID"),
                "className"=>$request->get("className"),
                "classRoom"=>$request->get("classRoom"),
            ]
        );
        return redirect()->to("/classes-list");
    }
}
