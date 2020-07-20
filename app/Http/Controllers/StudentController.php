<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;


class StudentController extends Controller
{
   public function index()
   {
    //    return view('studentform');
           $student = new student();
           $studentData=student:: all();
        //    print_r($studentData);
        return view('studentform')->with('students',$studentData); 


   }
   public function register(Request $req)
   {
    //    print_r($req->all());
        $student = new student();
        $student->name = $req->name;
        $student->f_name = $req->f_name;
        $student->email = $req->email;
        $student->status = $req->status;
        $student->save();
        // echo "data under Gya";
        return redirect ('/students');
        
   }

   public function update($id)
   {
    // echo "id" .$id;
    $student = new student();
    $findData = student::find($id);
    // echo $findData;
    return view('updaterecord')->with('updated', $findData);

   }
   public function updatedrecord(Request $req )
   {
       $student = student::find($req->id);
       $student->name = $req->name;
       $student->f_name = $req->f_name;
       $student->email = $req->email;
       $student->status= $req->status;
       $student->save();
       return redirect('/students');
   }
   public function deleterecord($id)
   {
       $student = new student();
       $student::destroy($id);
       return redirect('/students');
   }







   //apis


   public function getapi()
   {
      
       $studentData= student::all();
       return response()->jason($studentData);
   }





}
