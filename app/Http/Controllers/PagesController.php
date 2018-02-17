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
            return redirect('/uploads');
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

    public function home(){ 
        $user = auth()->user()->id;
        $files = File::orderBy('created_at', 'desc')->where([['user_id','=', $user], ['isDeleted', '=', '0']])->paginate(10);

        return view('pages.home')->with('files', $files);
    }
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
    public function tags(){ 

        return view('posts.tag-test');
    }

    public function pending(){ 
        $filename = DB::table('tags')
                    ->select('file_name', 'parameter')
                    ->where('area_id', '=', auth()->user()->area_handled)
                    ->where('tagstatus', '=', 'pending')
                    ->get()
                    ->toArray();
        $filenames = array();
        foreach($filename as $file){
            if(auth()->user()->area_handled == "area10"){
            $filenames[] = array(
                'filename' => $file->file_name,
                'parameter'=> $file->parameter,
                'letter' => substr($file->parameter, 2, 2)
            );
            }else{
                $filenames[] = array(
                'filename' => $file->file_name,
                'parameter'=> $file->parameter,
                'letter' => substr($file->parameter, 1, 1)  
            );}
        }
        $compare = array();

        foreach($filename as $file){
            $compare[] = $file->file_name;
        }

        $files = File::join('users', 'files.user_id', '=', 'users.id')
                        ->select('files.name as filename', 'users.name as username', 'file_type', 'files.id', 'files.created_at')
                        ->whereIn('files.name', $compare)->paginate(5);
        
        
            //dd($paramletter);
        return view('pages.pending')->with('files', $files)->with('filetags', $filenames);
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
                    ->where('tagstatus', '=', 'approved')
                    ->get();
        //s_1 => s.1            
        $subparam = preg_replace('/[^A-Za-z0-9]/', '.', substr($subpara, 2, strlen($subpara)));
        $files = array();  
        $keywords = DB::table('keywords')
                        ->select('keyword')
                        ->where('parameter', $subpara)
                        ->get();


        if(count($paraname) > 0){
            if(count($result) > 0){
                foreach($result as $res){
                    $wheres[] = $res->file_name;
                }

                $files = File::whereIn('name', $wheres)->where('isDeleted', '=', '0')->paginate(5);
            }
            //dd($subparam);
            return view('pages.areas.view_area')->with('files', $files)->with('paraname', $paraname)->with('areanum', $areanum)->with('arealink', $area)->with('subparam', $subparam)->with('keywords', $keywords)->with('paramletter', $para)->with('sub', $subpara);
        }else{ abort(404); }

    }

    public function viewpdf($id){
        $files = File::where('id', '=', $id)->get();
        //dd(storage_path());
       return view('posts.view')->with('files', $files);
    }

//CONTINUE APPROVE TAG
    public function approvetag(Request $request){
        if($request->has('approvetag')){
         DB::table('tags')
            ->where('file_name', $request->filename)
            ->where('parameter', $request->param)
            ->update(array('tagstatus' => 'approved'));
        }else if($request->has('rejectag')){
            DB::table('tags')
                ->where('file_name', $request->filename)
                ->where('parameter', $request->param)
                ->delete();
        }    
            //code to render pending page

            $filename = DB::table('tags')
                    ->select('file_name', 'parameter')
                    ->where('area_id', '=', auth()->user()->area_handled)
                    ->where('tagstatus', '=', 'pending')
                    ->get()
                    ->toArray();
        $filenames = array();
        foreach($filename as $file){
            if(auth()->user()->area_handled == "area10"){
            $filenames[] = array(
                'filename' => $file->file_name,
                'parameter'=> $file->parameter,
                'letter' => substr($file->parameter, 2, 2)
            );
            }else{
                $filenames[] = array(
                'filename' => $file->file_name,
                'parameter'=> $file->parameter,
                'letter' => substr($file->parameter, 1, 1)  
            );}
        }
        $compare = array();

        foreach($filename as $file){
            $compare[] = $file->file_name;
        }

        $files = File::join('users', 'files.user_id', '=', 'users.id')
                        ->select('files.name as filename', 'users.name as username', 'file_type', 'files.id', 'files.created_at')
                        ->whereIn('files.name', $compare)->paginate(5);
         
        //endlogic to render

            //$request->session()->flash('success', 'Approved the user successfully.');
             $html = view('pages.pending')->with('files', $files)->with('filetags', $filenames)->renderSections();
            $data = array(
                'success' => true,
                'html' => $html['content']
                
            );


            return response()->json($data);
        
    }

}

