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

    
    protected $fillable = [
        'username',
        'email',
        'password',
        'access',
    ];

    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function profile()
    {
        return $this->hasOne('profile');
    }


    const accessTitle = [
        1 => ['id' => 1 , 'title' => 'کاربر عادی'],
        2 => ['id' => 2 , 'title' => 'نویسنده'],
        3 => ['id' => 3 , 'title' => 'ادمین'],
    ];

    public function getAccessTitle()
    {
        $status = self::accessTitle;
        return $status[$this->access]['title'];
    }


    // public function BioSigns()
    // {
    //     return $this->hasMany(BioSigns::class);
    // }


}
