<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\File;

use App\Http\Controllers\Controller;
use App\User;
use App\Tag;
use DB;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }
    public function index(){
    	if(\Auth::guest())
    	   return view('desktop.pages.index');
        else
            return redirect('/home');
    }

    public function services(){
    	$title = "Services";

    	return view('desktop.pages.services')->with('title', $title);
    }


    public function about(){
        $title = "About";

        return view('desktop.pages.about')->with('title', $title);
    }



    
    /**
    * Function to load my uploads
    */
    public function uploads(){ 
        

        $user = auth()->user()->id;
        $files = File::orderBy('created_at', 'desc')->where([['user_id','=', $user], ['isDeleted', '=', '0']])->paginate(5);

        return view('pages.my_uploads')->with('files', $files);
    }
    public function viewfile($file){ 
        $user = auth()->user()->id;
        $files = File::where('id', '=', $file)->get();

        if(count($files) > 0){
            return view('pages.view-file')->with('files', $files);
        }else{
            abort(404);
        }   
    }

    /**
    * Function to view 
    */
    public function assignedArea(){ 
        $usernow = User::find(auth()->user()->id);
        $areaAssigned = $usernow->area_handled;
        $files = array();
        $area = array();
        //get the name of the user's area assigned
        $area = DB::table('areas')->where('area_id', '=', $areaAssigned)->get();
        //get files that is inside the Area specified
        $tag = DB::table('tags')
                    ->select('file_name')
                    ->where('area_id', '=', $areaAssigned)
                    ->get();
        $tag = $tag->toArray();
        if(count($tag) > 0){
            $tagdup = array_values(array_map("unserialize", array_unique(array_map("serialize", $tag))));

            //save the $tagdup results into array for whereIn
            foreach($tagdup as $key => $value){
                $wheres[] = $tagdup[$key]->file_name;
            }
            $files = DB::table('files')->whereIn("name", $wheres)
                            ->where('isDeleted', '=', '0')->get();

          
        }
            return view('desktop.pages.assignedArea')->with('files', $files)->with('area', $area);
    }

    /**
    * Function for handling the bin
    */
    public function bin(){ 
        $user = auth()->user()->id;
        $files = File::orderBy('created_at', 'desc')->where([['user_id','=', $user], ['isDeleted', '=', '1']])->paginate(5);
        return view('desktop.pages.bin')->with('files', $files);
    }
    
    /**
    * Functions that returns the view of areas
    */
    public function area1(){ 
        return view('desktop.pages.areas.area1');
    }
    public function area2(){ 
        return view('desktop.pages.areas.area2');
    }
    public function area3(){ 

        return view('desktop.pages.areas.area3');
    }
    public function area4(){ 

        return view('desktop.pages.areas.area4');
    }
    public function area5(){ 

        return view('desktop.pages.areas.area5');
    }
    public function area6(){ 

        return view('desktop.pages.areas.area6');
    }
    public function area7(){ 

        return view('desktop.pages.areas.area7');
    }
    public function area8(){ 

        return view('desktop.pages.areas.area8');
    }
    public function area9(){ 
        $files = DB::table('files')->paginate(5);

        return view('desktop.pages.areas.area9');
    }
    public function area10(){ 
        $files = DB::table('files')->paginate(5);

        return view('desktop.pages.areas.area10');
    }
    public function pending(){ 
        $files = DB::table('files')->paginate(5);

        return view('desktop.pages.pending')->with('files', $files);
    }
    public function mobile(){ 
        $files = DB::table('files')->paginate(5);

        return view('mobile.pages.home')->with('files', $files);
    }
    
    /**
    * Function to view the specific sub parameter
    */
    public function viewarea($area, $para, $subpara){ 
        // $files = DB::table('tag')->where('parameter', '=', $para)->paginate(5);    
        $paraname = DB::table('parameters')
                        ->select('param_name')
                        ->where('area_id', '=', $area)
                        ->where('param_id', '=', $para)       
                        ->get();
        // area1 => Area 1
        $areanum = strtoupper(substr($area, 0, 1)).substr($area, 1, 3)." ".substr($area, 4) ;
        $result = DB::table('tags')
                    ->select('file_name')
                    ->where('area_id', '=', $area)
                    ->where('parameter', '=', $subpara)
                    ->get();
        //s_1 => s.1            
        $subparam = preg_replace('/[^A-Za-z0-9]/', '.', substr($subpara, 2, strlen($subpara)));
        $files = array();   
            if(count($result) > 0){
            foreach($result as $res){
                $wheres[] = $res->file_name;
            }

            $files = File::whereIn('name', $wheres)->where('isDeleted', '=', '0')->paginate(5);
        }
        //dd($subparam);
        return view('desktop.pages.areas.view_area')->with('files', $files)->with('paraname', $paraname)->with('areanum', $areanum)->with('arealink', $area)->with('subparam', $subparam);
    }

}

