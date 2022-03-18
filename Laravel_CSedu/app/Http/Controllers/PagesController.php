<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Review;
use App\Models\Course;
use App\Models\Enroll;
use App\Models\Teacher;
use App\Models\Admin;


class PagesController extends Controller
{
    //


    public function logas()
    {
        return view('home.logins.logas');
    }
    public function login()
    {
        return view('home.logins.login');
    }
    public function loginSubmit(Request $req)
    {

        $this->validate($req,

          [
            
            'username'=>'required|min:5|max:20',
            'password'=>'required|min:3',
           
            

        ],

        [
            'username.required' => 'Please provide username',
            'username.max'=>'Username must not exceed 20 alphabets',
        ]
         );
       

        $st=Student::where('username',$req->username)->where('password',$req->password)->first();
       // if ($st) return "log in success";
       // else return "login failed";
       if ($st){
           session()->put('username',$st->username);
           session()->put('id',$st->id);
           session()->put('msg', 'Hello  '. $st->name );
           return redirect()->route('profile');

           
       

           //session()->get('username')
           //session()->has('username')
           //session()->forget('username'),//session()->forget(['id','username'])
           ////session()->flush( ) ----session destroy
           //session()->flash('key',value) // this will store the value in session key for sub quent request

       }
    }

    public function logint()
    {
        return view('home.logins.logint');
    }
    public function loginSubmitt(Request $req)
    {
        $this->validate($req,

        [
          
          'username1'=>'required|min:5|max:20',
          'password'=>'required|min:3',
         
          

      ],

      [
          'username1.required' => 'Please provide username',
          'username1.max'=>'Username must not exceed 20 alphabets',
          
      ]
       );

        $t=Teacher::where('username1',$req->username1)->where('password',$req->password)->first();
       // if ($st) return "log in success";
       // else return "login failed";
       if ($t){
           session()->put('username1',$t->username1);
           session()->put('id',$t->id);
           session()->put('msg', 'Hello  '. $t->name );
           return redirect()->route('profilet');

       }
    }
    public function logina()
    {
        return view('home.logins.logina');
    }
    public function loginSubmita(Request $req)
    {
        $this->validate($req,

        [
          
          'username2'=>'required|min:5|max:20',
          'password'=>'required|min:3',
         
          

      ],

      [
          'username2.required' => 'Please provide username',
          'username2.max'=>'Username must not exceed 20 alphabets',
          
      ]
       );

        $a=Admin::where('username2',$req->username2)->where('password',$req->password)->first();
       // if ($st) return "log in success";
       // else return "login failed";
       if ($a){
           session()->put('username2',$a->username2);
           session()->put('id',$a->id);
           session()->put('msg', 'Hello,  '. $a->name );
           return redirect()->route('aprofile');

       }
    }
    public function profile(Request $req)
    {
        $username=session()->get('username');
        $st=Student::where('username',$username)->first();
        return view('student.sprofile')->with('st',$st);
        
    }
    public function review(Request $req)
    {
        $username=session()->get('username');
       // $st=Student::where('username',$username)->first();
       $st=Student::all(); 
         //return $st;  
       return view('student.review')->with('st',$st);
        
        
    }
    public function addReview(Request $req)
    {
        $username=session()->get('username');
       // $st=Student::where('username',$username)->first();
       $st=Student::all(); 
         //return $st;  
       return view('student.addReview')->with('st',$st);
        
        
    }
    public function postReview(Request $req)
    {
        $username=session()->get('username');
        $st=Student::where('username',$username)->first();
       
        $r=new Review();
        $r->st_id=$st->id;
        $r->rev=$req->rev;

       
        $r->save(); 
        
        return redirect()->route('review');
        
        
        
    }

    public function getAllcourses(Request $req)
    {
        $username=session()->get('username');
        $st=Student::where('username',$username)->first();
        $courses=Course::all();
      return view('student.course')->with('courses',$courses)->with('st',$st);
    
       // $st=Student::where('username',$username)->first();
       
        
        
    }
    
    public function enroll(Request $req)
    {
        $username=session()->get('username');
        $st=Student::where('username',$username)->first();
       
        $e=new Enroll();
        $e->student_id=$st->id;
        $e->course_id=$req->id;
        $e->save();
        return redirect()->back();
        


       

       
       
        
        
    }
   
    public function register()
    {
        return view('home.logins.registration');
    }
    public function list()
    {
        
    }

    public function registersubmit(Request $req)
    {
          
        /* $req->validate(
               [
                   'name'=>'required|regex:/^[A-Z a-z]+$/',
                   'username'=>'required|min:5|max:20',
                   'email'=>'required|email',
                   'password'=>'required|min:8',
                   'conf_password'=>'required|same:password'

               ],

               [
                   'username.required' => 'Please provide username',
                   'username.max'=>'Username must not exceed 20 alphabets',
                   'conf_password.same'=>'Password and confirm password must match'
               ]

               );
        */

        
          $this->validate($req,

          [
            'name'=>'required|regex:/^[A-Z a-z]+$/',
            'username'=>'required|min:5|max:20',
            'email'=>'required|email',//|exists:students, email'
            'password'=>'required|min:3',
            'conf_password'=>'required|same:password'
            

        ],

        [
            'username.required' => 'Please provide username',
            'username.max'=>'Username must not exceed 20 alphabets',
            'conf_password.same'=>'Password and confirm password must match'
        ]
         );

         $st= new Student();
          $st->name=$req->name;
          $st->username=$req->username;
          $st->email=$req->email;
          $st->password=$req->password;
          $st->save(); 
         
         return redirect()->route('login');
    }

    public function csedu(){
        return view('home.logins.firstpage');
    }

    public function logout(){
        
        session()->flush();
        return redirect()->route('cs.edu');
    }
    
}
