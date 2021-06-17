<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = "payments";

    protected $fillable = [
        'date',
        'amount',
        'user_id',
        'exam_id',
        'price_id',
        'performing_role_id',
        
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function exams()
    {
        return $this->belongsTo(Exam::class,'exam_id');
    }

    public function prices()
    {
        return $this->belongsTo(Price::class,'price_id');
    }

    public function performingroles()
    {
        return $this->belongsTo(PerformingRole::class,'performing_role_id');
    }
}
