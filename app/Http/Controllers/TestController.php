<?php

namespace App\Http\Controllers;

use IlluminateHttpRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\User;


class TestController extends Controller
{
    //helped article : https://scotch.io/tutorials/token-based-authentication-for-angularjs-and-laravel-apps
	public function __construct()
   {
       // Apply the jwt.auth middleware to all methods in this controller
       // except for the authenticate method. We don't want to prevent
       // the user from retrieving their token if they don't already have it
       $this->middleware('jwt.auth', ['except' => ['authenticate']]);
   }
	public function test(){
		$users = User::all();
		return $users;
	}
}
