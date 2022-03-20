<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Student;
use App\Models\Enroll;
use App\Models\Admin;
use PDF;


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
        // $ee= Enroll::where('id',$req->id)->first();
       
        // foreach($ee->student_id as $s)
        // {
        //     if($s==null)
        //     {
        //         $st->delete();
        //           break;
        //     }
        //     else if($s==$st->id)
        //     {

        //     }
        //     else
        //     {
        //         $st->delete();
        //     }
        // }
       
       
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
    public function areview(Request $req)
    {
        $username=session()->get('username');
       // $st=Student::where('username',$username)->first();
       $st=Student::all(); 
         //return $st;  
       return view('admin.reviews')->with('st',$st);
        
        
    }
    public function editadmin(Request $req)
    {
        
       /* $student = Student :: where('id',decrypt($req->id))
        ->select('name','id')->first();*/
        $a = Admin :: where('id',decrypt($req->id))
        ->first();
       // return $student->department->head;
        //generate edit in blade

        //my code start from here
        return view('admin.aupdate')
        
        ->with('a',$a);
       
        
    }
    public function updateaa(Request $req)
    {
        $a= Admin::where('id',$req->id)->first();
       
        $a->name=$req->name;
        $a->email=$req->email;
        
       
        $a->save(); //update////////////crud operation
        return redirect()->route('aprofile');
    }

    public function searchRecord(Request $req)
    {
        
       if($req->isMethod('post'))
       {

       
        $name=$req->name;
        $cc= Course::where('name','LIKE','%'. $name .'%')->paginate(5);
       }
        
       
        return view('admin.clist',compact('cc'));
    }
    public function searchs(Request $req)
    {
        
       if($req->isMethod('post'))
       {

       
        $name=$req->name;
        $students= Student::where('name','LIKE','%'. $name .'%')->paginate(5);
       }
        
       
        return view('admin.slist',compact('students'));
    }
    public function searcht(Request $req)
    {
        
       if($req->isMethod('post'))
       {

       
        $name=$req->name;
        $t= Teacher::where('name','LIKE','%'. $name .'%')->paginate(5);
       }
        
       
        return view('admin.tlist',compact('t'));
    }
    public function searche(Request $req)
    {
        
       if($req->isMethod('post'))
       {

      
        $id=$req->student_id;
        $ee= Enroll::where('student_id','LIKE','%'. $id .'%')->paginate(5);
       }
        
       
        return view('admin.elist',compact('ee'));
    }

    public function pdf()
    {
       $c=Course::get();
       $dwn=PDF::loadView('admin.cdlist',['c'=>$c]);
       return $dwn->download('cdlist.pdf');
    }
    public function aadteacher()
    {
       
       return view('admin.aadteacher');
    }
    public function tregister(Request $req)
    {
        

        
          $this->validate($req,

          [
            'name'=>'required|regex:/^[A-Z a-z]+$/',
            'username'=>'required|min:5|max:20',
            'skill'=>'required|max:20',//|exists:students, email'
            'password'=>'required|min:3',
            'conf_password'=>'required|same:password'
            

        ],

        [
            'username.required' => 'Please provide username',
            'username.max'=>'Username must not exceed 20 alphabets',
            'conf_password.same'=>'Password and confirm password must match'
        ]
         );

         $t= new Teacher();
          $t->name=$req->name;
          $t->username1=$req->username;
          $t->skill=$req->skill;
          $t->password=$req->password;
          $t->save(); 
         
         return redirect()->route('tlist');
    }


    
}
