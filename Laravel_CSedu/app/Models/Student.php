<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Review;
use App\Models\CourseStudent;
use App\Models\Enroll;

class Student extends Model
{
    use HasFactory;
    public function review(){
        return $this->hasMany(Review::class, 'st_id');
    }
    public function courseStudent(){
        return $this->hasMany(Courset::class, 'st_id');
    }
    public function enroll(){
        return $this->hasMany(Enroll::class, 'student_id');
    }
    
}
