<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if ($request->expectsJson()) return null;

        if ($request->is('panel/admin') || $request->is('panel/admin/*'))
            return route('login', ['type' => 'admin']);
        else if ($request->is('panel/teacher') || $request->is('panel/teacher/*'))
            return route('login', ['type' => 'teacher']);
        else if ($request->is('panel/student') || $request->is('panel/student/*'))
            return route('login', ['type' => 'student']);
        return null;
    }
}
