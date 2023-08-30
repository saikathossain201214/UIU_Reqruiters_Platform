<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher_table extends Model
{
        public $table = 'teacher';
        public $primaryKey = 'id';
        public $incrementing = false; 
        public $timestamps = false;
}
