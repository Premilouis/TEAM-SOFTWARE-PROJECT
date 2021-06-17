<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $table = "prices";

    protected $fillable = [
        'unit',
        'price',
        'user_type_id',
        'exam_type_id',
        'action_id',
        
        
    ];

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function usertypes()
    {
        return $this->belongsTo(UserType::class,'user_type_id');
    }

    public function examtypes()
    {
        return $this->belongsTo(ExamType::class,'exam_type_id');
    }

    public function actions()
    {
        return $this->belongsTo(Action::class,'action_id');
    }
}
