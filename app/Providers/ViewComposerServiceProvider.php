<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \DB;
use Auth;
use App\File;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeSidebar();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
    * Compose the side-bar
    */
    private function composeSidebar(){
        view()->composer('inc.sidebar', function($view){

            $params = array();
            $area = array();
            $userarea = array();
        // logic for sidebar area assigned and parameters
        if(Auth::user()){
            $user = Auth::user()->id;
            $curuserarea = DB::table('users')->select('area_handled')
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
        //end of logic
        
            $view->with('area', $area)->with('params', $params)->with('arealink', $userarea)->with('files', $files)->with('filetags', $filenames);
        }
        });
    }
}
