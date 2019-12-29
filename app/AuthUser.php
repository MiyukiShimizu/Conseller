<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthUser extends Model
{
    protected $primaryKey = 'company_id';
    protected $table = 'auth_user';
}
