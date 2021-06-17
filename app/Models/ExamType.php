<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamType extends Model
{
    use HasFactory;

    protected $table = "exam_types";

    protected $fillable = [
        'type',
        
    ];

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function exams()
    {
        return $this->hasMany(Exam::class);
    }
}
