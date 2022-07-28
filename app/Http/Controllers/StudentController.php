<?php

namespace App\Http\Controllers;
use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    private $_GRID_URL = "/admin/students-list";
    public function listStudents(Request $request){
//        $students = Student::simplePaginate(5);
//        $classTable = with(new Classes)->getTable();
//        $studentTable = with(new Student)->getTable();
//        $students = Student::leftJoin($classTable, $studentTable.".classID",'=',$classTable.".classID")
//        ->select($studentTable.'.*',$classTable.'.className  as className',$classTable.'.classRoom')
//            -> simplePaginate(10);
//        $u = Auth::user();
//        if (!$u->is_admin) abort(404);
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

    public function form(){
        $classList = Classes::all();
        return view("pages.forms.student-forms.student-create",
            ['classesList'=>$classList]
        );
    }

    public function Create(Request $request){
        $request->validate([
            'studentID'=>'required|string|unique:student',
            'studentName'=>'required',
            'birthday'=>'required',
            'image'=>"image|mimes:jpeg,png,jpg,gif"
            ],[
                'required'=>'Vui lòng nhập thông tin',
                'image'=>'Vui lòng nhập đúng ảnh',
                 'mines'=>'Nhập đúng định dạng ảnh'
        ]);
        $image = null;
        if ($request->hasFile("image")) {
            $file = $request->file("image");
            $path = "uploads/";
            $fileName = time().rand(0,9).$file->getClientOriginalName();
            $file->move($path,$fileName);
            $image = $path.$fileName;
        }
            Student::create(
                [
                    "studentID"=>$request->get("studentID"),
                    "studentName"=>$request->get("studentName"),
                    'image'=>$image,
                    "birthday"=>$request->get("birthday"),
                    "classID"=>$request->get("classID")
                ]
            );
            return redirect()->to($this->_GRID_URL);
    }

    public function editStudents($id) {
        $classesList = Classes::all();
        $student = Student::find($id);
        return view('pages.forms.student-forms.student-edit', [
            'student'=>$student,
            'classesList'=>$classesList
        ]);
    }

    public function updateStudents(Request $request, Student $student) {
//        dd($request->all());
//        $student = Student::find($id);
        $image = $student->image;
        if ($request->hasFile("image")) {
            $file = $request->file("image");
            $path = "uploads/";
            $fileName = time().rand(0,9).$file->getClientOriginalName();
            $file->move($path,$fileName);
            $image = $path.$fileName;
        }
        $student->update([
            "studentName"=>$request->get("studentName"),
            "image"=>$image,
            "birthday"=>$request->get("birthday"),
            "classID"=>$request->get("classID")
        ]);
        return redirect()->to($this->_GRID_URL)->with("success","Update student successfully");
    }

    public function deleteStudents(Student $student){
        try {
            $student->delete();
            return redirect()->to("/students-list")->with("success","Delete student successfully");
        }catch (\Exception $e) {
            return redirect()->back()->with("error","Delete fail");
        }

    }
}
