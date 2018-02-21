<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Passport\Client;
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class LoginController extends Controller
{
	use IssueTokenTrait;

    private $client;

	public function __construct(){
		$this->client = Client::find(1);
	}

    public function login(Request $request){

    	$this->validate($request, [
    		'username' => 'required',
    		'password' => 'required'
    	]);

    	return $this->issueToken($request, 'password');

    	// PART 1

    	// $params = [

    	// 	'grant_type' => 'password',
    	// 	'client_id' => $this->client->id,
    	// 	'client_secret' => $this->client->secret,
    	// 	'username' => request('username'),
    	// 	'password' => request('password'),
    	// 	'scope' => '*'

    	// ];

    	// $request->request->add($params);

    	// $proxy = Request::create('oauth/token', 'POST');

    	// return Route::dispatch($proxy);

    }

    public function refresh(Request $request){
    	$this->validate($request, [
    		'refresh_token' => 'required'
    	]);

    	return $this->issueToken($request, 'password');

    	//PART 1 

    	$params = [

    		'grant_type' => 'refresh_token',
    		'client_id' => $this->client->id,
    		'client_secret' => $this->client->secret,
    		'username' => request('username'),
    		'password' => request('password')
    	];

    	$request->request->add($params);

    	$proxy = Request::create('oauth/token', 'POST');

    	return Route::dispatch($proxy);

    }

    public function logout(Request $request){

    	$accessToken = Auth::user()->token();

    	DB::table('oauth_refresh_tokens')
    		->where('access_token_id', $accessToken->id)
    		->update(['revoked' => true]);

    	$accessToken->revoked();

    	return response()->json([], 204);


    }
}
