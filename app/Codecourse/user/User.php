<?php

namespace Codecourse\User;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    protected $table = 'users';

    protected $fillable = [
        'username',
        'email',
        'password',
        'active',
        'active_hash',
        'remember_identifier',
        'remember_token',
    ];
}