<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'photo_id',
        'role_id',
        'position_id',
        'is_active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\Role', 'role_id');
    }

    public function position(){
        return $this->belongsTo('App\Position','position_id');
    }
    public function photo()
    {
        return $this->belongsTo('App\Photo', 'photo_id');
    }


    public function isAdmin()
    {
        if($this->role['name'] == 'Administrator' && $this->is_active == 1)
        {
            return true;
        }
        if($this->role['name'] == 'Viewer' && $this->is_active == 1)
        {
            return true;
        }
        if($this->role['name'] == 'Editor' && $this->is_active == 1)
        {
            return true;
        }
        if($this->role['name'] == 'HR' && $this->is_active == 1)
        {
            return true;
        }

        return false;
    }


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
