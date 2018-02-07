<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Notifications\FileTagged;
use App\User;
use \DB;

class TagsController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
		
		
	}
	// public function index(){

	// 	return view('posts.tag');
	// }

	public function store(Request $request){

	
		$input = $request->all();
		$areas = array_values($input['area']['area']);
		$param = array_values($input['param']['parameter']);
		

		//conditions for sizes of areas and param
		for($i = 0; $i < count($areas); $i++){

			$tags = new Tag;
			$tags->file_name = $input['filename'];
			$tags->area_id = $areas[$i];
			$tags->parameter = $param[$i];
			$tags->save();
		}

		
	

     //    NOTIFICATION ALGO DO NOT TAMPER
        $tagn = DB::table('tags')->where('file_name', '=', $input['filename'])->get();//TAGS where filename == the one in tags
        $users = User::all();	

       // var_dump($user);
        foreach($users as $user){
	        foreach($tagn as $tag)	
		      	if($user->area_handled == $tag->area_id){
			
		      		$user->notify(new FileTagged($input['filename'], $tag->parameter, $tag->area_id));
		    	}
    	}

        return redirect('/uploads')->with('success', 'File has been uploaded successfully!');
	}

	public function addKeyword(Request $request){

		$this->validate($request,[
            'keyword' => 'required'
        ]);

		$string = $request->keyword[0];

		//remove tabs produce by bootstrap tags
		$trim = trim(preg_replace('/[^a-zA-Z\,]+/', '', $string));
		//split the string into words
		$inputkeywords = explode(',', $trim);

		$paramkeywords = DB::table('keywords')
						->select('keyword')
						->where('parameter', $request->sub)
						->get()
						->toArray();
		
		//get original keys
		$origkeys  = array();
		
		for($i=0;$i<count($paramkeywords);$i++){
				$origkeys[$i] = $paramkeywords[$i]->keyword;

		}

		//getting the disjoint of original keywords and input keywords 
		$originput = array_merge(array_diff($inputkeywords, $origkeys), array_diff($origkeys, $inputkeywords));
		
		//determine what are the keywords that should be inserted or deleted
		$delete = array();
		$insert = array();
		for($i=0 ;$i<count($originput);$i++){
			if(array_search($originput[$i], $origkeys) != false){
				//echo $originput[$i]."not false <br>";
				$delete[] = $originput[$i];
			}
			else{
				//echo $originput[$i]."false <br>";
				$insert[] = $originput[$i];	
		  	}
		}

		//inserts the new keywords
		if(count($insert) > 0){
			for($i=0; $i<count($insert); $i++){
				DB::table('keywords')->insert([
					'keyword' => $insert[$i],
					'area_id' => $request->arealink,
					'parameter' => $request->sub
				]);
			}
		}	

		//deletes a keyword
		if(count($delete) > 0){
			for($i=0; $i<count($delete); $i++){
				DB::table('keywords')
					->where('keyword', '=', $delete[$i])
					->delete();
			}
		}//end delete

		//things needed to load view_area.blade.php
		return redirect('/'.$request->arealink.'/'.$request->paramletter.'/'.$request->sub);
		
	}
	
}

