<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;

class TestMiddleware
{
    public function handle($request, Closure $next, ...$guards)
    {
        dd(func_get_args());
    }
}
