<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Student;
use App\Models\Enroll;
use App\Models\Admin;


class AdminController extends Controller
{
    //
    public function aprofile(Request $req)
    {
        $username=session()->get('username2');
        $aa=Admin::where('username2',$username)->first();
        return view('admin.aprofile')->with('a',$aa);
        
    }
    public function slist()
    {
        
        $students=Student::all(); //select * from students and also converts it into collection of student object
      
        return view('admin.slist')->with('students',$students);
    }

    public function sdelete(Request $req)
    {
        // $username=session()->get('username');
        // $st=Student::where('username',$username)->first();
       
        $st= Student::where('id',$req->id)->first();
         $st->id=$req->id;
       
        $st->delete();
        return redirect()->back();   
        
    }
    public function tlist()
    {
        
        $t=Teacher::all(); //select * from students and also converts it into collection of student object
      
        return view('admin.tlist')->with('t',$t);
    }
    public function tdelete(Request $req)
    {
        // $username=session()->get('username');
        // $st=Student::where('username',$username)->first();
       
        $t= Teacher::where('id',$req->id)->first();
         $t->id=$req->id;
       
        $t->delete();
        return redirect()->back();   
        
    }
    public function clist()
    {
        
        $c=Course::all(); //select * from students and also converts it into collection of student object
      
        return view('admin.clist')->with('cc',$c);
    }
    public function cdelete(Request $req)
    {
        // $username=session()->get('username');
        // $st=Student::where('username',$username)->first();
       
        $c= Course::where('id',$req->id)->first();
         $c->id=$req->id;
       
        $c->delete();
        return redirect()->back();   
        
    }
    public function elist()
    {
        
        $e=Enroll::all(); //select * from students and also converts it into collection of student object
      
        return view('admin.elist')->with('ee',$e);
    }
    public function edelete(Request $req)
    {
        // $username=session()->get('username');
        // $st=Student::where('username',$username)->first();
       
        $e= Enroll::where('id',$req->id)->first();
         $e->id=$req->id;
       
        $e->delete();
        return redirect()->back();   
        
    }
    
}
