<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Event extends Authenticatable
{
    protected $fillable = [
        'title',
        'category_id',
        'category_name',
        'subcategory_id',
        'subcategory_name',
        'is_trending',
        'price',
        'description',
        'slug',
        'status',
    ];
    protected $table="events";

    function e_image(){
        return $this->hasMany('App\Models\EventImage', 'event_id', 'id');
    }

    function e_feature(){
        return $this->hasMany('App\Models\EventFeature', 'event_id', 'id');
    }

}
