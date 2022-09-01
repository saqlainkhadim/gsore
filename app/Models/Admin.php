<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $fillable = [
        'username', 'email', 'simple_pass','password','active','role'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
