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

    public function area(){ 
        $files = DB::table('files')->paginate(5);

        return view('pages.my_uploads')->with('files', $files);
    }

    public function assignedArea(){ 
        $files = DB::table('files')->paginate(5);

        return view('pages.assignedArea')->with('files', $files);
    }
}

