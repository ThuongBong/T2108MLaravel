<?php

namespace App\Http\Controllers;
use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public  function  listClasses() {
//        $classes = Classes::all();
//        dd($classes);
//        $classes = Classes::orderBy("name","asc")
//            ->select('cid', 'name', 'room')
//            ->limit(5)
//            ->skip(5)
//            ->get(); api
        $classes = Classes::withCount("students")->simplePaginate(5);
        return view("pages.tables.listClasses", [
            "classes"=>$classes
        ]);
    }
}
