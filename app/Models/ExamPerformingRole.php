<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamPerformingRole extends Model
{
    use HasFactory;

    protected $table = "exam_performing_roles";

    protected $fillable = [
        'exam_id',
        'performing_role_id',
        
    ];
}
