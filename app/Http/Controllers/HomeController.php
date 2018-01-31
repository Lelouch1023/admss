<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Http\Requests;

use \Input as Input;

use App\File;

use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user_id = auth()->user()->id;
        // $user = User::find($user_id);
        if(auth()->user()->isApproved != 1){
            return redirect(route('getLogout'));
        }else{
            return redirect('/uploads');
        }
    }

    /**
    *logs a user out after registration
    */
    public function logoutreg(Request $request) {
        auth()->logout();
        return back()->with('success', 'Account created. Wait for the admin approval to be able to login.');
      
    }
}
