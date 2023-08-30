<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TA_List extends Model
{
    use HasFactory;
    protected $table = 'ta_list'; // Specify the table associated with this model

    protected $fillable = [
        'sname',
        'sid',
        'cname',
        'cid',
        'section',
        'tname',
        'tid',
        // Add other columns you want to be mass assignable
    ];
}
