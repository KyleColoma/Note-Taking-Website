<?php

namespace Core\Middleware;

use Core\Middleware\Guest;
use Core\Middleware\Auth;

class Middleware
{
    const MAP = [
        "guest" => Guest::class,
        "auth" => Auth::class,
    ];

    public static function resolve($key)
    {

        if (!$key) {
            return;
        }

        $middleware = static::MAP[$key] ?? false;

        if (!$middleware) {
            throw new \Exception("No Matching Middleware found for '{$key}'.");
        }

        (new $middleware)->handle($key);
    }
}
