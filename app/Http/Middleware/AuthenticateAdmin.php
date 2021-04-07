<?php

namespace App\Http\Middleware;

use App\Http\Requests;
use Closure;


class AuthenticateAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


        if ( ! session('userData.id')){

            return redirect('admin/login');

        }

        return $next($request);

    }

}









//namespace App\Http\Middleware;
//use App\Models\UserModel;
//
//
//use Closure;
//use Illuminate\Support\Facades\Session;
//
//class UserIsValid
//{
//    /**
//     * Handle an incoming request.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \Closure  $next
//     * @return mixed
//     */
//    public function handle($request, Closure $next)
//    {
//
////        $id = Session::all();
////        if (!$id) {
////           return route('admin');
////        }else{
////            return route('dashboards');
////        }
//    }
//}
