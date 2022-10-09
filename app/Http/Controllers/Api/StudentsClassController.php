<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentsClass;

class StudentsClassController extends Controller
{


    public function Index(){
        $studentClass = StudentsClass::latest()->get();

        return response()->json($studentClass);

//          return $studentClass;

    }

    public function Store(Request $request){
        $validateData = $request->validate([
            'class_name' =>'required|unique:students_classes|max:25'
        ]);

        StudentsClass::insert([
            'class_name'=> $request->class_name
        ]);
        return response('Student Class inserted Successfully');

    }

    public function Edit($id){
        $studentClass = StudentsClass::findOrFail($id);
        return response()->json($studentClass);
    }

    public function update(Request $request, $id){
        StudentsClass::findOrFail($id)->update([
            'class_name'=> $request->class_name
        ]);
        return response('Student Class Updated Successfully');
    }

    public function delete($id){
        StudentsClass::findOrFail($id)->delete();
        return response('Student Class Deleted Successfully');
    }


}
