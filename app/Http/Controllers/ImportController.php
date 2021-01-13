<?php

namespace App\Http\Controllers;
use App\Imports\ImportStudent;
use App\Student;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;




class ImportController extends Controller
{
    public function Index(){
    	$students = Student::all();
    	return view ('import', compact('students'));
    }
    public function Upload(Request $request){
    	Excel::import(new ImportStudent(),$request->file('student'));
    	return back();
    	
    }
}
