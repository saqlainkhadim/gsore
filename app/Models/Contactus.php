<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Contactus extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'subject',
        'message',
        'status',
    ];
    protected $table="contactus";

}
