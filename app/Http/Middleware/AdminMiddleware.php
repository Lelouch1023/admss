<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{

    protected $auth;

    public function __construct(){
        $this->auth = auth();
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->getUser()->user_lvl !== 1) {
            abort(404);
        }
        return $next($request);
    }
}
