<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MySuperMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->filled('name') || $request->input('name') !== 'myMiddleware') {
            return redirect('/error');
        }

        return $next($request);
    }
}
