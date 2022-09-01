<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Userkyc extends Authenticatable
{
    protected $fillable = [
        'user_id  ',
        'state',
        'country',
        'city',
        'address',
        'pincode',
        'profile_image',
        'aadhar_number',
        'dob',
        'gender',
        'alternate_mobile_no',
    ];
    protected $table="user_kyc";

    function user_data(){
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

}
