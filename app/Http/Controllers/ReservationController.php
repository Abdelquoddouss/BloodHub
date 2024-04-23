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
                'reservation_date' => now(), 
                'appointment_date' => $request->input('appointment_date'),
                'status' => Reservation::STATUS_APPROVED, 
 
            ]);
            
            // Envoyer l'e-mail de confirmation avec la date formatée
            Mail::to(Auth::user()->email)->send(new ReservationConfirmation($reservation));
        
            return redirect()->back()->with('success', 'Réservation effectuée avec succès.');
        }



        public function showReservations()
        {
            // Récupérer toutes les réservations avec les informations du centre et de l'utilisateur
            $reservations = Reservation::with('center', 'user')->get();
    
            return view('Admin.StaticReservation', compact('reservations'));
        }

    }
