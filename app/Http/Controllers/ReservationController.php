<?php

    namespace App\Http\Controllers;

    use App\Mail\ReservationConfirmation;
    use App\Models\Reservation;
    use Carbon\Carbon;
    use DateTime;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Mail;

    class ReservationController extends Controller
    {
        public function makeReservation(Request $request)
        {
            // Logique pour effectuer la réservation
            $reservation = Reservation::create([
                'user_id' => Auth::id(),
                'center_id' => $request->input('center_id'),
                'reservation_date' => now(), // Utilisez now() pour obtenir la date et l'heure actuelles
                'appointment_date' => $request->input('appointment_date'), // Utilisez la date du rendez-vous fournie par l'utilisateur
            ]);
            
            // Envoyer l'e-mail de confirmation avec la date formatée
            Mail::to(Auth::user()->email)->send(new ReservationConfirmation($reservation));
        
            return redirect()->back()->with('success', 'Réservation effectuée avec succès.');
        }

    }
