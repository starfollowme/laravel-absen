<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticated extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // Jika request BUKAN mengharapkan response JSON (yaitu dari browser biasa),
        // arahkan pengguna ke halaman login yang sudah kita namai 'login'.
        // Jika tidak, return null (untuk request API).
        return $request->expectsJson() ? null : route('login');
    }
}
