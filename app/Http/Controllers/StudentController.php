<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
   public function showStudents(){
    $students = DB::table('students')->select('id', 'name')->get();
     
    // return $students;
//   dd($students);

return view('pages.allStudent',['students'=>$students] );
 
 }

 public function addStudent(Request $req){
    // $student = DB::table('students')->insert([
    //      'name'=>'ajharul islam jopy',
    //      'email'=>'ajharuli4400@gmail.com',
    //      'updated_at'=>now(),
    //      'created_at'=>now()
    // ]);


    //for duplicate data
   //  $student = DB::table('students')->insertOrIgnore([
   //       'name'=>'ajharul islam jopy',
   //       'email'=>'ajharuli4400@gmail.com',
   //       'updated_at'=>now(),
   //       'created_at'=>now()
   //  ]);
   // if($student){
   //  echo "<h1 > data successfully added</h1>";
   // }else{
   //   echo "<h1 > already email exist</h1>";
   // }


    $student = DB::table('students')->insert([
         'name'=>$req->name,
         'email'=>$req->email,
         'updated_at'=>now(),
         'created_at'=>now()
    ]);   
    
    if($student){
    return redirect()->route('home');
   }else{
     echo "<h1 > already email exist</h1>";
   }
 }


 public function updateStudent(){
    $student = DB::table('students')->where('id', 1)->update([
        'name'=>"updated name"
    ]);
 }

 public function deleteStudent(){
    $student = DB::table('students')->where('id', 21)->delete();
 }

}
   