<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_table extends Model
{
    public $table = 'student';
    public $primaryKey = 'id';
    public $incrementing = false; 
    public $timestamps = false;
}
