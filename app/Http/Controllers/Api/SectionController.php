<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SectionController extends Controller
{

    public function Index(){
        $section = Section::latest()->get();

        return response()->json($section);

//          return $studentClass;

    }

    public function Store(Request $request){
        $validateData = $request->validate([
            'section_name' =>'required|unique:sections|max:25'
        ]);

        Section::insert([
            'class_id'=> $request->class_id,
            'section_name'=> $request->section_name,
            'created_at'=> Carbon::now(),
        ]);
        return response('Student Section inserted Successfully');

    }

    public function Edit($id){
        $section = Section::findOrFail($id);
        return response()->json($section);
    }

    public function update(Request $request, $id){
        Section::findOrFail($id)->update([
            'class_id'=> $request->class_id,
            'section_name'=> $request->section_name,
        ]);
        return response('Student Section Updated Successfully');
    }

    public function delete($id){
        Section::findOrFail($id)->delete();
        return response('Student Section Deleted Successfully');
    }
}
