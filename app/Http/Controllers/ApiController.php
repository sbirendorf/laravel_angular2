<?php

namespace App\Http\Controllers;

/**
* 
*/
class ApiController extends Controller
{
	protected $statusCode = 200;


	public function getStatusCode(){
		return $this->statusCode;
	}

	public function setStatusCode($statusCode){
		$this->statusCode = $statusCode;

		return $this;
	}

	public function jsonApi($data){
		return \Response::json([
				'error' => false,
				'data' => $data,
				'status_code' => $this->getStatusCode()
			]);
	}

	public function jsonApiNotFound($message = "Not Found"){
		return $this->setStatusCode(404)->respondWithError($message);
	}

	public function jsonApiWithError($message){
		return \Response::json([
				'error' => true,
				'message' => $message,
				'status_code' => $this->getStatusCode()
		]);
		
	}
}