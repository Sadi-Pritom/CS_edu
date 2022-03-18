<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //


    public function list()
    {
        
        $students=Student::all(); //select * from students and also converts it into collection of student object
        
        /*

       // $student = array ("id"=>1,"name"=>"Tanvir Ahmed","dob"=>"12.12.12");
       // $student=(object) $student;
        //return var_dump($student);
        $students = array();
        for($i=0;$i<10;$i++){
            $student=array(
                "id"=> $i+1,
                "name"=>"student".($i+1),
                "dept"=>"CS"

            );
            $student=(object)$student;
            $students[]=$student;

        }
         */
        return view('student.list')->with('students',$students);
    }
    
    public function details(Request $req)
    {
        return view('student.get')
        ->with('name',$req->name)
        ->with('id',$req->id-839)
        ->with('courses',[]);
    }

    public function edit(Request $req)
    {
        
       /* $student = Student :: where('id',decrypt($req->id))
        ->select('name','id')->first();*/
        $student = Student :: where('id',decrypt($req->id))
        ->first();
       // return $student->department->head;
        //generate edit in blade

        //my code start from here
        return view('student.update')
        
        ->with('student',$student);
       
        
    }

    //if its your editsumit function
    public function updateSubmit(Request $req)
    {
        $st= Student::where('id',$req->id)->first();
       
        $st->email=$req->email;
        $st->username=$req->username;
        
       
        $st->save(); //update////////////crud operation
        return redirect()->route('profile');
    }
    



    }
   
    


