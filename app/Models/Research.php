<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'research_topic';

   protected $primaryKey='id';
}
