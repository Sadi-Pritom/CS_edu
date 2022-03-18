<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Course;

class TeacherController extends Controller
{
    //
    public function getAllcoursest(Request $req)
    {
        $courses=Course::all();
       return view('teacher.course')->with('courses',$courses);
       // $st=Student::where('username',$username)->first();
       
        
        
    }
    public function addCourse(Request $req)
    {
        $username=session()->get('username1');
       // $st=Student::where('username',$username)->first();
       $t=Teacher::all(); 
        //return $t;  
       return view('teacher.addCourse');
        
        
    }
    public function postCourse(Request $req)
    {
        $username=session()->get('username1');
        $t=Teacher::where('username1',$username)->first();
       
        // $r=new Review();
        // $r->st_id=$st->id;
        // $r->rev=$req->rev;

        $c=new Course();
        $c->name=$t->skill;
        $c->teacher=$t->name;
        $c->price=$req->price;
        $c->save();
        return redirect()->route('courses');



       
      //  $r->save(); 
        
       // return redirect()->route('review');
        
        
        
    }

    public function profilet(Request $req)
    {
        $username=session()->get('username1');
        $t=Teacher::where('username1',$username)->first();
        return view('teacher.tprofile')->with('t',$t);
        
    }

    public function editt(Request $req)
    {
        
       /* $student = Student :: where('id',decrypt($req->id))
        ->select('name','id')->first();*/
        $t = Teacher :: where('id',decrypt($req->id))
        ->first();
       // return $student->department->head;
        //generate edit in blade

        //my code start from here
        return view('teacher.tupdate')
        
        ->with('t',$t);
       
        
    }

    public function updateSubmitt(Request $req)
    {
        $t= Teacher::where('id',$req->id)->first();
       
        $t->name=$req->name;
        $t->skill=$req->skill;
        
       
        $t->save(); //update////////////crud operation
        return redirect()->route('courses');
    }
}
