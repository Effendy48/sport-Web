<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
class adminModel extends Model implements Authenticatable
{
    //
    use AuthenticableTrait;

    protected $table = 'administrator';

    protected $primaryKey = 'id';

    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
        'name','role','photo','email','password'
    ];

}
