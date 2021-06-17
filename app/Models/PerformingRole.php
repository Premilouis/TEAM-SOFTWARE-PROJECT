<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerformingRole extends Model
{
    use HasFactory;

    protected $table = "performing_roles";

    protected $fillable = [
        'action_id',
        'user_id',
        
    ];

    public function exams()
    {
        return $this->belongsToMany(Exam::class,'exam_performing_roles');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
