<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Review extends Model
{
    use HasFactory;

    public function student(){
        return $this->belongsTo(Student::class,'st_id'); 
        //return $this->belongsTo(Department::class,'dept_id','username');//mane department table er id er sathe connect na hoye username er sathe connect hobe
    }
}
