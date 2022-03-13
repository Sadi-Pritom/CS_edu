<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CourseStudent;
use App\Models\Enroll;

class Course extends Model
{
    use HasFactory;
    public function courseStudent()
    {
        return $this->hasMany(CourseStudent::class, 'c_id');
    }
    public function enroll(){
        return $this->hasMany(Enroll::class, 'course_id');
    }
}
