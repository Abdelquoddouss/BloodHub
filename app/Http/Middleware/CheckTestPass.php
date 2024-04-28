<?php

namespace App\Http\Middleware;

use App\Models\BloodDonationResult;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckTestPass
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {

        $userId = auth()->id();
        $lastQuizResult = BloodDonationResult::where('user_id', $userId)->first();

        if ($lastQuizResult && Carbon::now()->diffInDays($lastQuizResult->updated_at) < 30) {
        return redirect('/page4');
        }

        return $next($request);
    }
}
