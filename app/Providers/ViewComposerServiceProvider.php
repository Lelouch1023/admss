<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \DB;
use Auth;

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
        }
        //end of logic
            $view->with('area', $area)->with('params', $params)->with('arealink', $userarea);

        });
    }
}
