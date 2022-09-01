<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Blog extends Authenticatable
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'status',
    ];
    protected $table="blogs";
}
