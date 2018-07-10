<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckContaProfessor
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

        if (Auth::user()->tipoUser != 'professor') {
            if (Auth::user()->tipoUser == 'escola') {
                return redirect('escola/home');
            } else if (Auth::user()->tipoUser == 'admin') {
                return redirect('admin/home');
            } else if (Auth::user()->tipoUser == 'avaliador') {
                return redirect('avaliador/home');
            }
        }

        return $next($request);

    }
}
