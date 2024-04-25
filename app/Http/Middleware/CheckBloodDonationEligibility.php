<?php

namespace App\Http\Middleware;

use App\Models\BloodDonationResult;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckBloodDonationEligibility
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Vérifier si l'utilisateur est authentifié
        
        if (!Auth::check()) {
            return redirect()->back()->withErrors(['error' => 'Vous devez être connecté pour réserver ou passer une réservation.']);
        }

        $userId = auth()->id();
        $lastQuizResult = BloodDonationResult::where('user_id', $userId)->first();
        if ( !$lastQuizResult || $lastQuizResult->score!=9  ) {
            
             return redirect('/page4');
        }
        return $next($request);

        
    }



}
