<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use JWTAuth;

class APIController extends Controller
{

	public function __construct(){
		//$this->middleware('auth');
	}
   public function auth(Request $request){
	   	$credentials = $request->only('email', 'password');

	   	$validator = Validator::make($credentials, [
	   		'email' => 'required|email',
	   		'password' => 'required'

	   	]);

	   	if($validator->fails()){
	   		return response()
	   			->json([
	   				'code' => 1,
	   				'message' => 'Validation failed',
	   				'errors' => $validator->errors()], 422);
	   	}

	   	$token = JWTAuth::attempt($credentials);
	   	if($token){
	   		return response()->json(['token' => $token]);
	   	}else{
	   		return response()->json(['code' => 2, 'message' => 'Invalid credentials'], 401);

	   	}

    }
}
