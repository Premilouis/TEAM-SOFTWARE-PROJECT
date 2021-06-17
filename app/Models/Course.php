<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = "courses";

    protected $fillable = [
        'code',
        'name',
        'level',
        'num_of_credits',
        
        
    ];

    public function exams()
    {
        return $this->hasMany(Exam::class);
    }
}
