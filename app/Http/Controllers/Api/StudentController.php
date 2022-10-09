<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function Index(){
       $student = Student::latest()->get();
       return response()->json($student);
    }

    public function Store(Request $request){
        $studentDataValidate = $request->validate([
            'email' => 'required|unique:students|max:50',
            'name' => 'required|max:50',
        ]);

        Student::insert([

            'class_id' => $request->class_id,
            'section_id' => $request->section_id,
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $request->image,
            'gender' => $request->gender,
            'created_at' => Carbon::now(),
        ]);
        return response('Student added Successfully');

    }

    public function Edit($id){
        $students = Student::findOrFail($id)->get();
        return response()->json($students);
    }

    public function update(Request $request,$id){
        Student::findOrFail($id)->update([
            'class_id' => $request->class_id,
            'section_id' => $request->section_id,
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $request->image,
            'gender' => $request->gender,
            'created_at' => Carbon::now(),
        ]);
        return response('Student Information Updated');
    }
    public function delete($id){
        Student::findOrFail($id)->delete();
        return response('Student deleted');
    }


}
