<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Loginmr extends Model
{
    protected $fillable = [
        'name', 'email', 'password',
    ];
}
