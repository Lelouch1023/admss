<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\FileTagged;
use App\Http\Requests;
use \Input as Input;
use App\File;
use App\Tag;
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
        $files = File::orderBy('created_at', 'desc')->paginate(10); 

        return view('home')->with('files', $files);
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
            'tag' => 'required',
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
        
        $tags = new Tag;
        $tags->filename = $fileNameToStore;
        $tags->tag = $request->input('tag');
        $tags->user = auth()->user()->id;
        $tags->save();

        $users = User::all();

       // var_dump($user);
            foreach($users as $user){
                if($user->area_handled == $request->input('tag')){
                    $user->notify(new FileTagged($fileNameToStore));
                }
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
        $files = File::orderBy('created_at', 'desc')->paginate(1);
        return view('posts.show')->with('posts', $files);
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

    public function uploads($id){

        $files = File::find($id);

        return view('pages.my_uploads')->with('posts', $files);
    }
    public function assignedArea(){

        return view('pages.my_area');
    }
    public function bin(){

        return view('pages.bin');
    }
}
    