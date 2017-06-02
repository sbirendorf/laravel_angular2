<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Properties; // add the Properties modal class

class PublicPropertiesController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    
     */


    public function show($state = null ,$county = null)
    {
    	//move to validation function or maybe you have to call with state and county so we will need to return an error
        if(!isset($state)){
        	$state = 'CA';
        }
        if(!isset($county)){
        	$county = 'Alameda';
        }
        //need to validate that the county and state exist 
        $properties = Properties::getProperties(strtoupper($state),strtoupper($county),2);

        return $this->jsonApi($properties);
    }

    // public function history($id =null, $state = null ,$county = null)
    // {
       
    //     $table = 'property_resi_history_'.$county.'_'.$state;
    //     $data = \DB::table($table)->where('property_id', $id)->get();

    //     return $this->jsonApi($data);
    // }
}
