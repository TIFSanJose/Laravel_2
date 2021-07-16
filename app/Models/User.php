<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

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
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
// one to one  User < 1--1 Domicilio
    public function domicilio(){
        return $this->hasOne(Domicilio::class);
    }
// one to one  User < 1--1 Perfil
    public function perfil(){
        return $this->hasOne(Perfil::class);
    }
// one to many  User < 1--* Post
    public function posts(){
        return $this->hasMany(Post::class);
    }

// many to many User < *--* Rol    
    public function roles(){
        return $this->belongsToMany(Role::class);
    }

// many to many User < *--* Video    
    public function videos(){
        return $this->belongsToMany(Video::class);
    }

// one to one Polimorfica User < 1--1 Image 1--1 Post
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

}
