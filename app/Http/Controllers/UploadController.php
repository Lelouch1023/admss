<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use \Input as Input;
use App\Notifications\FileTagged;
use App\File;
use App\User;
use DB;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        // $files = File::orderBy('created_at', 'desc')->paginate(10); 

        // return view('home')->with('files', $files);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'file' => 'max:1999|mimes:doc,docx,pdf|required'
            'tag' => 'required'
            'file' => 'required|max:1999|mimes:doc,docx,pdf'
            'file' => 'max:1999|mimes:doc,docx,pdf'

            'tags' => 'required',
            'file' => 'required|max:1999|mimes:doc,docx,pdf'


        ]);

        //Handle File Upload
        if ($request->hasFile('file')) {

            //Get file name with extension
            $filenameWithExt = $request->file('file')->getClientOriginalName();

            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Get the Ext
            $extension = $request->file('file')->getClientOriginalExtension();

            $filesize = $request->file('file')->getClientSize();

            //Filename to store 
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //upload the file
            $path = $request->file('file')->storeAs('public/uploads', $fileNameToStore);

        $file = new File;

        $file->user_id = auth()->user()->id;

        $file->name = $fileNameToStore;

        $file->size = $filesize;

        $file->save();
        

        }
        $tag = $request->input('tags');
        $users = User::all();

       // var_dump($user);
        foreach($users as $user){
            if($user->area_handled == $request->input('tags')){
            //     //$user = User::where('area_handled', $request->input('tag'))->first();
             // Notification::send($user, new FileTagged(auth()->user()->tags()));
                $user->notify(new FileTagged($fileNameToStore));
            }
        }

        

        


        return redirect('/home')->with('success', 'Post Created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $file = File::find($id);
        //
        return view('posts.show')->with('posts', $file);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = File::find($id);
        $file->delete();
        return redirect('home')->with('success', 'File Deleted');
    }

    public function download(){

        $file = DB::table('files')->get();
        return view('home', compact(file));
    }

    public function search(Request $request){

        $term = $request->term;
        $files = File::where('name', 'LIKE', '%'.$term.'%')->get();
        //return $files;

        if(count($files) == 0){
            $searchResult = ['No such file.'];
        }
        else{
            foreach($files as $file){
                $searchResult[] = $file->name;            }
        }

        return $searchResult;

    }

    public function result(Request $request){

        $term = Input::get('searchItem', '');
        $files = File::where('name', 'LIKE', '%'.$term.'%')->paginate(10);

        return view('pages.searchResult')->with('files', $files);
        //return $files;

        
    }
}
