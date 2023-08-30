<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'pdf_link'];
    public function uploads()
    {
        return $this->hasMany(FileUpload::class, 'subject_id');
    }
}
