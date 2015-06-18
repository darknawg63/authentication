<?php

namespace Codecourse\User;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    protected $table = 'users';

    protected $fillable = [
        'email',
        'password',
        'active',
        'active_hash',
        'remember_identifier',
        'remember_token',
    ];
}