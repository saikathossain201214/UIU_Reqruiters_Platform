<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'pdf_path'];

    // Add validation rules if needed
    public static $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'pdf_path' => 'required|string',
    ];
}
