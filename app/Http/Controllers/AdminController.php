<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Http\Requests;

use \Input as Input;

use App\File;
use \App\Jobs\AdminApprove;
// use \App\Jobs\AdminReject
// use \App\Jobs\AdminAssign
use DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $requests = User::where('isApproved', '=', 0)
                        ->orderBy('created_at', 'desc')
                        ->paginate(5);
            $chairs = User::where('isApproved', '=', 1)
                        ->orderBy('name', 'asc')
                        ->paginate(5);

        $area = DB::table("areas")->get();

        return view('pages.admin')->with('requests', $requests)->with('chairs', $chairs)->with('areas', $area);


    }

    /**
    * Assigns a user to an area by an admin
    *
    */
    public function findaction(Request $request){
        if ($request->has('approve')) {
            $user = User::find($request->user_id);
            $user->isApproved = 1;
            $user->save();

            $requests = User::where('isApproved', '=', 0)
                        ->orderBy('created_at', 'desc')
                        ->paginate(5);
            $chairs = User::where('isApproved', '=', 1)
                        ->orderBy('name', 'asc')
                        ->paginate(5);
         


            $area = DB::table("areas")->get();
            //$request->session()->flash('success', 'Approved the user successfully.');
            $html = view('pages.admin')->with('requests', $requests)->with('chairs', $chairs)->with('areas', $area)->renderSections();
            $data = array(
                'html' => $html['content'],
                'success' => true,
               
            );
            return response()->json($data);
        }else if ($request->has('assign')) {

            $oldchair = User::where('area_handled', '=', $request->area_handled)
                                ->update(['area_handled' => 0]);

            $user = User::find($request->user_id);
            $user->area_handled = $request->area_handled;
            $user->save();

            $areaf = DB::table('areas')
                    ->where('area_id', '=', $request->area_handled)
                    ->update(['area_handler' => $request->user_id]);

            $requests = User::where('isApproved', '=', 0)
                        ->orderBy('created_at', 'desc')
                        ->paginate(5);
            $chairs = User::where('isApproved', '=', 1)
                        ->orderBy('name', 'asc')
                        ->paginate(5);

            $area = DB::table("areas")->get();

            //$request->session()->flash('success', 'Approved the user successfully.');
            $html = view('pages.admin')->with('requests', $requests)->with('chairs', $chairs)->with('areas', $area)->renderSections();
            $data = array(
                'html' => $html['content'],
                'success' => true,
               
            );
            return response()->json($data);

        }else if($request->has('giveadmin')){
            $user = User::find($request->user_id);
            $user->user_lvl = 1;
            $user->save();

            $requests = User::where('isApproved', '=', 0)
                        ->orderBy('created_at', 'desc')
                        ->paginate(5);
            $chairs = User::where('isApproved', '=', 1)
                        ->orderBy('name', 'asc')
                        ->paginate(5);
         

            //$request->session()->flash('success', 'Approved the user successfully.');
            $html = view('pages.admin')->with('requests', $requests)->with('chairs', $chairs)->renderSections();
            $data = array(
                'html' => $html['content'],
                'success' => true,
               
            );
            return response()->json($data);
        }else if($request->has('revokeadmin')){
            $user = User::find($request->user_id);
            $user->user_lvl = 0;
            $user->save();

            $requests = User::where('isApproved', '=', 0)
                        ->orderBy('created_at', 'desc')
                        ->paginate(5);
            $chairs = User::where('isApproved', '=', 1)
                        ->orderBy('name', 'asc')
                        ->paginate(5);
         

            //$request->session()->flash('success', 'Approved the user successfully.');
            $html = view('pages.admin')->with('requests', $requests)->with('chairs', $chairs)->renderSections();
            $data = array(
                'html' => $html['content'],
                'success' => true,
               
            );
            return response()->json($data);
        }


        // return 'no action found';
        // }
    }

    public function deluser($id){

        $user = User::find($id);
        $user->delete();


        return redirect('/admin')->with('success', "Successfully deleted.");

    }
}