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

	// public function addArea(){
	// 	$data = array(
	// 		array('name'=>"Area 1: Vision, Mission, Goals and Objectives"
	// 		),
	// 		array(
	// 		'name'=>"Area 3: Curriculum and Instruction"),
	// 		array('name'=>"Area 4: Support to Students"),
	// 		array('name'=>"Area 5: Research"),
	// 		array('name'=>"Area 6: Extension and Community Involvement"),
	// 		array('name'=>"Area 7: Library"),
	// 		array('name'=>"Area 8"),
	// 		array('name'=>"Area 9: Physical Plant and Facilities"),
	// 		array('name'=>"Area 10: Laboratories")
			
	// 	);
	// 	// $area = new Tag;
	// 	// $length = count($data);
	// 	// for($i = 0; $i < $length; $i++){
	// 	//  	 $area->name = $data[$i];
	// 	//  	 $area->save();
	// 	//  }
	// 	Tag::insert($data);
		
	// }

	
}

