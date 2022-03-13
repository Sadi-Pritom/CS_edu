<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

        ////this for CV
        Route::get('/loginn',function(){
            return view('cv.login');
        });
        Route::get('/home',function(){
            return view('cv.home');
        });
        Route::get('/profile',function(){
            return view('cv.profile');
        });
        Route::get('/edu',function(){
            return view('cv.edu');
        });
        Route::get('/projects',function(){
            return view('cv.projects');
        });
        Route::get('/contact',function(){
            return view('cv.contact');
        });



      

 Route::get('/login',[PagesController::class,'login'])->name('login'); 
 Route::post('/login',[PagesController::class,'loginSubmit'])->name('login');

 Route::get('/logint',[PagesController::class,'logint'])->name('logint'); 
 Route::post('/logint',[PagesController::class,'loginSubmitt'])->name('logint');

 Route::get('/logas',[PagesController::class,'logas'])->name('logas');

 



 Route::get('/register',[PagesController::class,'register']);   
 
 
        
         
        Route::get('/studentList',[StudentController::class,'list'])->name('student.list')->middleware('authorized'); 
        


Route::get('/student/details/{id}/{name}',[StudentController::class,'details'])->name('student.details');         
         

                Route::post('/register',[PagesController::class,'registersubmit'])->name('register.submit');  



Route::get('/students/list',[PagesController::class,'list'])->name('students.list');      //database access  --eta te kaj nai emni create kora hoyse      
                   
                   

                Route::get('/students/edit/{id}',[StudentController::class,'edit'])->name('students.edit');
        
                
    Route::post('/update',[StudentController::class,'updateSubmit'])->name('update.submit');   
    
    Route::get('/csedu',[PagesController::class,'csedu'])->name('cs.edu');
    Route::get('/logout',[PagesController::class,'logout'])->name('logout');
    Route::get('/profile',[PagesController::class,'profile'])->name('profile'); 
    Route::get('/review',[PagesController::class,'review'])->name('review'); 
    Route::get('/addReview',[PagesController::class,'addReview'])->name('addReview');
    Route::post('/addReview',[PagesController::class,'postReview'])->name('postReview');
    Route::get('/courses',[PagesController::class,'getAllcourses'])->name('courses');
    Route::get('/enroll/{id}',[PagesController::class,'enroll'])->name('enroll');

//////////////teacher
    Route::get('/addCourse',[TeacherController::class,'addCourse'])->name('addCourse');
    Route::post('/addCourse',[TeacherController::class,'postCourse'])->name('postCourse');
    Route::get('/profilet',[TeacherController::class,'profilet'])->name('profilet');
    Route::get('/teachers/edit/{id}',[TeacherController::class,'editt'])->name('teachers.edit'); 
   Route::post('/updatee',[TeacherController::class,'updateSubmitt'])->name('update.submitt');  
   ////////////////asmin
   Route::get('/logina',[PagesController::class,'logina'])->name('logina'); 
    Route::post('/logina',[PagesController::class,'loginSubmita'])->name('logina');
    Route::get('/slist',[AdminController::class,'slist'])->name('slist');
    Route::get('/sdelete/{id}',[AdminController::class,'sdelete'])->name('sdelete');
    Route::get('/tlist',[AdminController::class,'tlist'])->name('tlist');
    Route::get('/tdelete/{id}',[AdminController::class,'tdelete'])->name('tdelete');
    Route::get('/clist',[AdminController::class,'clist'])->name('clist');
    Route::get('/cdelete/{id}',[AdminController::class,'cdelete'])->name('cdelete');
    Route::get('/elist',[AdminController::class,'elist'])->name('elist');
    Route::get('/edelete/{id}',[AdminController::class,'edelete'])->name('edelete');
    Route::get('/aprofile',[AdminController::class,'aprofile'])->name('aprofile');
