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

		dd($request->all());
		$input = $request->all();
		$inputtags = array();
		$inparea = array_map("unserialize", array_unique(array_map("serialize", $input['area']['area'])));
		//dd($inparea);

		//extract tags from $request
		foreach($inparea as $inp ){
			for($i = 0; $i < count($input['tags_'.$inp]); $i++){
				$inpstring = $input['tags_'.$inp][$i];
				$trim = trim(preg_replace('/[^a-zA-Z0-9\_,]+/', '', $inpstring));
				$trimmed = explode(',', $trim);
				$inputtags[] = array(
					'tag' => array_values($trimmed),
					'area' => $inp

				); 

			}

		}

		$areas = array();
		$param = array();

		foreach($inputtags as $inptags){

			
			for($i = 0; $i < count($inptags['tag']); $i++){

				$areas[] = $inptags['area'];
				$param[] = $inptags['tag'][$i];
			}
		}

		//dd($param);
		// $input = $request->all();
		// $areas = array_values($input['area']['area']);
		// $param = array_values($input['param']['parameter']);
		

		// //saving tags
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

	public function manualtag(Request $request){
		
		//dd($request->all());

  	 	$area = $request->areaarch;
  	 	$letter = $request->paramletarch;
  	 	$sub = $request->subparamarch;
  	 	$file = $request->filename;

  	 	$tags = new Tag();
  	 	$tags->file_name = $file;
  	 	$tags->area_id = $area;
  	 	$tags->parameter = $sub;
  	 	$tags->save();

  	 	//    NOTIFICATION ALGO DO NOT TAMPER
        $tagn = DB::table('tags')->where('file_name', '=', $file)->get();//TAGS where filename == the one in tags
        $users = User::all();	

       // var_dump($user);
        foreach($users as $user){
	        foreach($tagn as $tag)	
		      	if($user->area_handled == $tag->area_id){
			
		      		$user->notify(new FileTagged($file, $tag->parameter, $tag->area_id));
		    	}
    	}



  	 	return redirect('/archive')->with('success', "Tag has been successfully added.");
	}

	public function unarchive(Request $request){

		$file = $request->filename;

		$tags = array();
		$tags = DB::table('tags')
				->where('file_name', '=', $file)
				->get();
		if(count($tags) > 0){
			$files = DB::table('files')
						->where('name', '=', $file)
						->update(array('isArchived' => 0));

	  	 	$data = array(
	  	 		'success' => true,
	  	 	);
  	 	} 
  	 	else{
  	 		$data = array(

  	 			'success' => false
  	 		);
  	 	}
		// $data = array(
		// 	'success' => count($tags);
		// );
  	 	return response()->json($data);
	}

	public function move(Request $request){

		$file = $request->filename;

		$files = DB::table('files')
					->where('name', '=', $file)
					->update(array('isArchived' => 1));

		return redirect('/archive')->with('success', "The file has been archived.");

	}
	
}

