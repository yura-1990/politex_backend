<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use function app;

class ApiLocalization
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
        $defaultLanguage = (in_array($request->lang, ['en', 'ru', 'uz'])?$request->lang:'uz');
        app()->setLocale($defaultLanguage);
        return $next($request);
    }
}
