<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Course;

class Enroll extends Model
{
    
    
    public function student(){
        return $this->belongsTo(Student::class,'student_id'); 
        //return $this->belongsTo(Department::class,'dept_id','username');//mane department table er id er sathe connect na hoye username er sathe connect hobe
    }
    public function course(){
        return $this->belongsTo(Course::class,'course_id'); 
        //return $this->belongsTo(Department::class,'dept_id','username');//mane department table er id er sathe connect na hoye username er sathe connect hobe
    }
}
