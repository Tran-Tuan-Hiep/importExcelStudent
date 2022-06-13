<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudentImport;
use App\Models\Student;
use DB;

class StudentController extends Controller 
{
    public function importView(Request $request){
        return view('importFile');
    }
    public function import(Request $request){
        Excel::import(new StudentImport, $request->file);
        return redirect()->route('viewfind')->with('success', 'User Imported Successfully');
    }
    public function find(Request $request){
        $fullname = $request->fullname;
        $id_student = $request->id_student;
        if(!empty($id_student)){
            $std = DB::table('excels')
                ->where('id_student','like','%'.$id_student.'%')
                ->get();
        }else{
            $std = DB::table('excels')
                ->where('fullname','like','%'.$fullname.'%')
                ->get();
        }       
        return view('viewFind')->with([
            'std' => $std,
        ]);
    }
}

