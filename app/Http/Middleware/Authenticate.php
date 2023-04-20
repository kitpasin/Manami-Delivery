<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        // if ($request->server()['REQUEST_URI']) {
        //     http_response_code(401);
        //     echo json_encode([
        //         "message" => "error",
        //         "description" => "Invalid credential!"
        //     ]);
        //     exit();
        // }
            // dd(auth()->guard('web')->user());
        if (!$request->expectsJson()) {
            return route('login-member');
        }
    }
}
