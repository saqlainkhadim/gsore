<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class As_seen_no extends Authenticatable
{
    protected $fillable = [
        'image',
        'is_home',
        'status',
    ];
    protected $table="asseennos";
}
