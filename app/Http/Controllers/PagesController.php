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
        $this->middleware('auth');
    }
    public function index(){
    	
    	return view('pages.index');
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

        $curuserarea = User::select('area_handled')
                            ->where('id', '=', $user)
                            ->get();
        foreach($curuserarea as $area){
            $userarea = $area->area_handled;
        }

        $area = DB::table('areas')
                    ->select('name')
                    ->where('area_id', '=', $userarea)
                    ->get();

        $params = DB::table('parameters')
                    ->select('param_name')
                    ->where('area_id', '=', $userarea)
                    ->get();
        
        return view('pages.my_uploads')->with('files', $files)->with('area', $area)->with('params', $params)->with('arealink', $userarea);
    }
    public function viewfile(){ 
        $user = auth()->user()->id;
        $files = File::orderBy('created_at', 'desc')->where([['user_id','=', $user], ['isDeleted', '=', '0']])->paginate(10);
        return view('pages.view-file')->with('files', $files);
    }

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
            $files = DB::table('files')->whereIn("name", $wheres)->get();

          
        }
            return view('pages.assignedArea')->with('files', $files)->with('area', $area);
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
    public function pending(){ 
        $files = DB::table('files')->paginate(5);

        return view('pages.pending')->with('files', $files);
    }
    // public function viewarea(){ 
    //     $files = DB::table('files')->paginate(5);

    //     return view('pages.areas.view-area')->with('files', $files);
    // }
    public function viewarea($area, $para, $subpara){ 
        // $files = DB::table('tag')->where('parameter', '=', $para)->paginate(5);    
        $paraname = DB::table('parameters')
                        ->select('param_name')
                        ->where('area_id', '=', $area)
                        ->where('param_id', '=', $para)       
                        ->get();
        $areanum = strtoupper(substr($area, 0, 1)).substr($area, 1, 3)." ".substr($area, 4) ;
        $result = DB::table('tags')
                    ->select('file_name')
                    ->where('area_id', '=', $area)
                    ->where('parameter', '=', $subpara)
                    ->get();
                    
        $subparam = preg_replace('/[^A-Za-z0-9]/', '.', substr($subpara, 2, strlen($subpara)));
        $files = array();   
            if(count($result) > 0){
            foreach($result as $res){
                $wheres[] = $res->file_name;
            }

            $files = File::whereIn('name', $wheres)->paginate(5);
        }
        //dd($subparam);
        return view('pages.areas.view_area')->with('files', $files)->with('paraname', $paraname)->with('areanum', $areanum)->with('arealink', $area)->with('subparam', $subparam);
    }

}

