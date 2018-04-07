<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Student extends Authenticatable
{
    use Notifiable;
    protected $guard='student';
    protected $guarded=['id'];
    //protected $fillable=['firstname', 'surname'];
    protected $hidden=[
        'password','remember_token',
    ];

}
