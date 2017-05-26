<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    
    public static function getProperties($state, $county, $limit){
        $table = 'lead_resi_'.$county.'_'.$state;
        $data = \DB::table($table)->limit($limit)->get();

        return $data;
    }
}
