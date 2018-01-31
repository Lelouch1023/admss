<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{

	public function __construct()
	{
	    $this->layout = Agent::isMobile() ? 'mobile.pages.index' : 'pages.index';
	}

	public function index(){
		if ( Agent::isMobile() ) 
           return view('mobile.pages.index');
		 else 
           return view('pages.index');
    }
}
