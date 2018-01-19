<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\File;

use App\Http\Controllers\Controller;

use DB;

class PagesController extends Controller
{
    public function index(){
    	//$title = "Winter is Coming."
    	$data = array(
    		'title' => 'Welcome to Laravel!',
    		'chars' => ['Jon', 'Dany', 'Cersei']
    		);
    	return view('pages.index')->with($data);
    }

    public function services(){
    	$title = "Services";

    	return view('pages.services')->with('title', $title);
    }


    public function about(){
        $title = "About";

        return view('pages.about')->with('title', $title);
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
    
    public function area1(){ 
        $files = DB::table('files')->paginate(5);

        return view('pages.areas.area1')->with('files', $files);
    }
    public function area2(){ 
        $files = DB::table('files')->paginate(5);

        return view('pages.areas.area2')->with('files', $files);
    }
    public function area3(){ 
        $files = DB::table('files')->paginate(5);

        return view('pages.areas.area3')->with('files', $files);
    }
    public function area4(){ 
        $files = DB::table('files')->paginate(5);

        return view('pages.areas.area4')->with('files', $files);
    }
    public function area5(){ 
        $files = DB::table('files')->paginate(5);

        return view('pages.areas.area5')->with('files', $files);
    }
    public function area6(){ 
        $files = DB::table('files')->paginate(5);

        return view('pages.areas.area6')->with('files', $files);
    }
    public function area7(){ 
        $files = DB::table('files')->paginate(5);

        return view('pages.areas.area7')->with('files', $files);
    }
    public function area8(){ 
        $files = DB::table('files')->paginate(5);

        return view('pages.areas.area8')->with('files', $files);
    }
    public function area9(){ 
        $files = DB::table('files')->paginate(5);

        return view('pages.areas.area9')->with('files', $files);
    }
    public function area10(){ 
        $files = DB::table('files')->paginate(5);

        return view('pages.areas.area10')->with('files', $files);
    }
    // public function viewarea(){ 
    //     $files = DB::table('files')->paginate(5);

    //     return view('pages.areas.view-area')->with('files', $files);
    // }
    public function viewarea($para){ 
        $files = DB::table('files')->where('parameter', '=', $para)->paginate(5);           

        return view('pages.areas.view-area')->with('files', $files);
    }

}

