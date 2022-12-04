<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cors
{

    /**
     * Массив доменов, с которых будем принимать запросы.
     *
     * @var array
     */
    protected $domains = [
        'http://narek.dev.php-cat.com',
        'https://narek.dev.php-cat.com',
        'http://localhost',
        'https://localhost',
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $origin = $request->headers->get('Origin');

        //если есть, то устанавливаем нужные заголовки
        // return $next($request)
        return $next($request)
            ->header('Access-Control-Allow-Origin', $origin)
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE')
            ->header('Access-Control-Allow-Credentials', 'true')
            ->header(
                'Access-Control-Allow-Headers',
                'Authorization, Origin, X-Requested-With, Accept, X-PINGOTHER, Content-Type'
            );
        // // return $next($request);
        // return $next($request)
        //     ->header('Access-Control-Allow-Origin', '*')
        //     ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    }
}
