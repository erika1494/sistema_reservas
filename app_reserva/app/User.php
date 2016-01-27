<?php

namespace App;
<<<<<<< HEAD
#This is the live
=======
#This is the life
>>>>>>> 7beb9c75ac1d6c29500e47c70dea47574d7e2808

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
