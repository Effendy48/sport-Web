<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class administratorModel extends Model
{
    //

    protected $table = 'administrator';

    protected $fillable = [
        'name','role','photo','email','password'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

   
}
