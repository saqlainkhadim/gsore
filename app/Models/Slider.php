<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Slider extends Authenticatable
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'status',
       
    ];
    protected $table="banner";
}
