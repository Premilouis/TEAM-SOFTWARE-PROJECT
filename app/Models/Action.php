<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    use HasFactory;

    protected $table = "actions";

    protected $fillable = [
        'name',
        
    ];

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'performing_roles');
    }
}
