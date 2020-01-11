<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthUser extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'auth_user';
}
