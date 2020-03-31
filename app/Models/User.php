<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Model;

class User extends Model  implements Authenticatable
{
    use AuthenticableTrait;

    protected $fillable = [
        'login',
        'password',
        'email'
    ];
}