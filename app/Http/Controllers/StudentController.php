<?php

namespace App\Http\Controllers;
use App\students;
use Illuminate\Http\Request;
use App\Http\Requests; 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\user;
use App\Http\Controllers\StudentController;

class StudentController extends Controller
{
	public function showForm(Request $request){
		return view ('form');
	}
    public function Request_form(Request $request)
    {    
    
    	$firstname=$request->firstname;
    	$middle=$request->middle;
    	$lastname=$request->lastname;
    	$course=$request->course;
    	$id_number=$request->id_number;

    	$student = new students;
    	$student ->firstname = $firstname;
    	$student ->middle = $middle;
    	$student ->lastname = $lastname;
    	$student ->course = $course;
    	$student ->id_number = $id_number;
        $student ->save();

    		return view('complete-form' , [
    			'firstname' => $firstname,
    			'middle' =>$middle,
    			'lastname' => $lastname,
    			'course' => $course,
    			'id_number' => $id_number
    		]);

    
    }
 public function showList(){
        // $users = DB::table('students')->get();
        // return view('show-student-list',[
        //     'users' => $users]);
        $users = students::orderBy('id')->get();
        return view('show-student-list', [
            'users' =>$users]);
    }

public function Update(Request $request){
        return view('update' , [
                'id'=>$request->id,
                'firstname' =>$request->firstName,
                'middle'=>$request->middleName,
                'lastname'=>$request->lastName,
                'course' =>$request->course_stud,
                'id_number'=>$request->idNumber

            ]);
}

//public function editform(Request $request, $id){
  //  $student = students::find($id);
 //   return view('Edit-student-form' ,[
   //     'firstname'=>$firstname;
     //   'middle'=>$middle;
       // 'lastname'=>$lastname;
        //'course' => $course;
        //'id_number'=>$id_number;
        //]);
//}
public function editform(Request $request, $id){
       $student = students::find($id);
       $student ->firstname = $request->firstName;
       $student ->middle = $request->middleName;
       $student ->lastname = $request->lastName;
        $student ->course = $request->course_stud;
       $student ->id_number = $request->idNumber;
       $student ->save();

   return redirect('/show-student-list');    
}

// public function deleteform(Request $request ,$id){
//    $student = students::find($id);
//    $student->delete();

//    return redirect('/show-student-list');
// }
public function deleteform(Request $request)
{
    $users = DB::table('students')->delete();
    return view('/show-student-list'); 
}
}

