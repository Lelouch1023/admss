<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function file(){
        return $this->hasMany('App\File');
    }

    public function getJWTCustomClaims() : array {
        return [];
    }

    public function getJWTIdentifier(){
        return $this->getKey();
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

}
