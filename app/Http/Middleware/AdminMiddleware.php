<?php

namespace App\Http\Middleware;

use Closure;

use Session;
use Illuminate\Support\Facades\Redirect;

class AdminMiddleware {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        
        if(Session::get('signin_email') == NULL) {
            return Redirect::to('signin-panel-hsms');
        } else {
            return Redirect::to('dboard');
        }

        //return $next($request);
    }

}
