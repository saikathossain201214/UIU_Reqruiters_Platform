<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTeacher extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'course_teacher';
    protected $primaryKey='id';
    // protected $fillable = [
    //     'course_name',
    //     'course_id',
    //     'teacher_name',
    //     'teacher_id',
    //     'section',
        
    // ];
}
