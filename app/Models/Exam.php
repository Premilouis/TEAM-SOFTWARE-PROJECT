<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $table = "exams";

    protected $fillable = [
        'duration',
        'num_of_students',
        'start_time',
        'end_time',
        'date',
        'kind',
        'num_of_pages',
        'num_of_groups',
        'exam_type_id',
        'course_id',
        
    ];

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function examtypes()
    {
        return $this->belongsTo(ExamType::class,'exam_type_id');
    }

    public function courses()
    {
        return $this->belongsTo(Course::class,'course_id');
    }

    public function performingroles()
    {
        return $this->belongsToMany(PerformingRole::class,'exam_performing_roles');
    }
}
