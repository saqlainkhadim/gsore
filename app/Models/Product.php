<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Product extends Authenticatable
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'status',
        'price',
    ];
    protected $table="products";
}
