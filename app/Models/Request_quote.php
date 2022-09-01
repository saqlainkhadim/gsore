<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Request_quote extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'message',
        'status',
    ];
    protected $table="request_quotes";

}
