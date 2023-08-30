<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestForm extends Model
{
    use HasFactory;
    protected $table = 'requests';
    protected $fillable = ['teacher_name', 'teacher_id', 'course_name', 'course_id', 'section', 'credit'];
}
