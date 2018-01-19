<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\File;

use App\Http\Controllers\Controller;

use DB;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['only'=>['index']]);
        $this->middleware('auth', ['except'=>['index']]);
    }
    public function index(){
    	//$title = "Winter is Coming."
        
        	
        	return view('pages.index');
        
    }


    public function uploads(){ 
        $user = auth()->user()->id;
        $files = File::orderBy('created_at', 'desc')->where([['user_id','=', $user], ['isDeleted', '=', '0']])->paginate(10);

        return view('pages.my_uploads')->with('files', $files);
    }

    public function assignedArea(){ 
        $files = DB::table('files')->paginate(10);

        return view('pages.assignedArea')->with('files', $files);
    }
    public function bin(){ 
        $user = auth()->user()->id;
        $files = File::orderBy('created_at', 'desc')->where([['user_id','=', $user], ['isDeleted', '=', '1']])->paginate(10);
        return view('pages.bin')->with('files', $files);
    }
    public function area2(){ 
        $files = DB::table('files')->paginate(5);

        return view('pages.areas.area2')->with('files', $files);
    }
}

