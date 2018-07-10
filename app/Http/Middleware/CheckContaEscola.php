<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckContaEscola
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

        if (Auth::user()->tipoUser != 'escola') {
            if (Auth::user()->tipoUser == 'admin') {
                return redirect('admin/home');
            } else if (Auth::user()->tipoUser == 'avaliador') {
                return redirect('avaliador/home');
            } else if (Auth::user()->tipoUser == 'professor') {
                return redirect('professor/home');
            }
        }

        return $next($request);

    }
}
