<?php

namespace App\Http\Middleware;

use Closure;

class Rolemiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        echo '1. Middleware';
        echo 'Vai trò:' . $role;
        echo '<br>Thực hiện khi đang xứ lý Http response';
        return $next($request);
    }
    public function terminate($request,$response)
    {
        echo '<br>3. terminate Middleware';
        echo '<br> Thực hiện sau khi http response gửi đến trình duyệt';
    }
}
