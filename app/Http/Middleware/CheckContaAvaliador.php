<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckContaAvaliador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (Auth::user()->tipoUser != 'avaliador') {
            if (Auth::user()->tipoUser == 'escola') {
                return redirect('escola/home');
            } else if (Auth::user()->tipoUser == 'admin') {
                return redirect('admin/home');
            } else if (Auth::user()->tipoUser == 'professor') {
                return redirect('professor/home');
            }
        }

        return $next($request);

    }
}
