<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'password',
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    //es: desde aqui
    //en: from here
    public function roles(){
        return $this->belongsToMany('App\Models\permisos\Models\Role')->withTimesTamps();
    }

    public function perfil()
    {
        return $this->hasMany('App\Models\Perfil','user_id');
    }

    public function havePermission($permission){
        
        foreach ($this->roles as $role) {
        if ($role['full-access'] =='yes'){
            return true;
        }
    }
}
}