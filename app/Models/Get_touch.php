<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Get_touch extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'subject',
        'message',
        'status',
    ];
    protected $table="get_touchs";

}
