<?php

    namespace App\Http\Middleware;
    use Closure;

    class CekLoginMiddleware
    {
        public function handle($request, Closure $next){
            if(!session('login')){
                return redirect('/');
            }
            return $next($request);
        }
    }