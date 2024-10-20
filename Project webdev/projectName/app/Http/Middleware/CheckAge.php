<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $minAge = 18) // Default to 18
    {
      
        \Log::info('CheckAge middleware executed.'); // Log to verify middleware execution
        $age = $request->query('age'); // Get the age from the query string

        // Check if the user is below the minimum age
        if (isset($age)) {
            if ($age < $minAge) {
                return redirect('/access-denied'); 
            } elseif ($age >= 21) {
                return redirect('/homepage'); 
            } elseif ($age == 18) {
                return redirect('/index');
            }
        }

        return $next($request);
    }
}