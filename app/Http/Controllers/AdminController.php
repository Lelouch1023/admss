<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Http\Requests;

use \Input as Input;

use App\File;

use DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Admin";

        $users = User::where('isApproved', '=', 0)
                    ->orderBy('created_at', 'desc')
                    ->paginate(7);


        return view('pages.admin')->with('title', $title)->with('users', $users);
    }

    /**
    * Assigns a user to an area by an admin
    *
    */
    public function assign(Request $request){
        dd($_POST);
        // $user =  User::find();
        // $user->area_handled = $request->area_assign;
        // $user->isApproved = 1;
        // $user->save();

        // $users = User::where('isApproved', '=', 0)
        //             ->orderBy('created_at', 'desc')
        //             ->paginate(7);

        // return view('pages.admin')->with('success', 'Approved the user successfully.')->with('users', $users);
    }
    
}
