<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class IsSubscrived
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        /** se nao estiver logado manda para o login */
        if(!Auth::check()){
            Session::flash('error','Necessita de fazer login para aceder a este conteúdo!');
            return redirect()->route('login');
        }

        /** se nao estiver subscrito manda para a inscricao */
        if(!$request->user()->subscrived) {
            Session::flash('error','Página interdita, é necessário ser subscritor para aceder a este conteúdo!');
            return redirect()->route('inscrever');
        }

        /** se tudo ok dá acesso a forum*/
        return $next($request);
    }
}
