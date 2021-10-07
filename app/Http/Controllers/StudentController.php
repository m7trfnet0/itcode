<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\DataTables\StudentDataTable;


class StudentController extends Controller
{
    public function index(StudentDataTable $dataTable){
        return $dataTable->render('studentable');
    }
    public function addStudent(){
        return view('addStudent');
    }
    public function storeStudent(Request $request){
        $name=$request->name;
        $image=$request->file('file');
        $imageName=time(). '.' .$image->extension();
        $image->move(public_path('images'),$imageName);
        $student =new Student();
        $student->name = $name;
        $student->profileimage = $imageName;
        $student->save();
        return back()->with('success_added','Student record has been inserted');
    }
    public function student(){
        $students=Student::all();
        return view('allstudent',compact('students'));
    }
    public function editStudent($id){
        $student=Student::find($id);
        return view('editstudent',compact('student'));
    }
    public function updateStudent(Request $request){
        $name=$request->name;
        $image=$request->file('file');
        $imageName=time(). '.' .$image->extension();
        $image->move(public_path('images'),$imageName);
        $student = Student::find($request->id);
        $student->name = $name;
        $student->profileimage = $imageName;
        $student->save();
        return back()->with('success_update','Student record has been  updated');
    }
    public function deleteStudent($id){
        $student=Student::find($id);
        unlink(public_path('images').'/'.$student->profileimage );
        $student->delete();
        return back()->with('success_delete','Student record has been  delete');
    }
    public function search(){
        return view('search');
    }
    public function autocomplete(Request $request){
        $datas=Student::select('name')
                        ->where('name','LIKE',"%{$request->terms}%")
                        ->get();
        return response()->json($datas);
    }
}
