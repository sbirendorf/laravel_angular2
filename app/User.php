<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
     public static function getUserInfo($id){
        $user = \DB::table('leadtrac_user')->where('id', '=', $id)->first();
        return $user;
    }

    public static function getUserChosenCounty($id){
        $user = User::getUserInfo($id);
        $county = \DB::table('lead_county')->where('id', '=', $user->chosen_county)->first();
        return $county;
    }
}
