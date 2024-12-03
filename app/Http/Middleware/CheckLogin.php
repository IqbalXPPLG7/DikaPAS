<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Periksa jika session 'logged_in' tidak ada atau false
        if (!session('logged_in')) {
            // Jika tidak login, redirect ke halaman login
            return redirect('/login');
        }

        // Lanjutkan ke request berikutnya jika sudah login
        return $next($request);
    }
}
