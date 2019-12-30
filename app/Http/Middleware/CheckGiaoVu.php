<?php

namespace App\Http\Middleware;

use Closure;


class CheckGiaoVu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->session()->has('ma_giao_vu')){
            return $next($request);
        }
        else{
            return redirect()->route('view_login')->with('error','Chưa đăng nhập');
        }
    }
}
