<?php

namespace App\Models;
use App\Models\Role;
//use App\Models\UserRole;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = "users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name',
        'email',
        'first_name',
        'last_name',
        'mobile',
        'bank_acc_num',
        'bank_name',
        'nic_num',
        'designation',
        'user_type_id',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function usertypes()
    {
        return $this->belongsTo(UserType::class,'user_type_id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class,'user_roles');
    }

    public function actions()
    {
        return $this->belongsToMany(Action::class,'performing_roles');
    }




    public function authorizeRoles($roles)
    {
      if ($this->hasAnyRole($roles)) {
        return true;
      }
      abort(401, 'This action is unauthorized.');
    }
    public function hasAnyRole($roles)
    {
      if (is_array($roles)) {
        foreach ($roles as $role) {
          if ($this->hasRole($role)) {
            return true;
          }
        }
      } else {
        if ($this->hasRole($roles)) {
          return true;
        }
      }
      return false;
    }
    public function hasRole($role)
    {
      if ($this->roles()->where('type', $role)->first()) {
        return true;
      }
      return false;
    }
}
