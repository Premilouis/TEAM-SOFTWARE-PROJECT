<?php

namespace App\Models;

use App\Models\User;
//use App\Models\UserRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = "roles";

    protected $fillable = [
        'type',
        
    ];

    public function users()
    {
        return $this->belongsToMany(User::class,'user_roles');
    }
}
