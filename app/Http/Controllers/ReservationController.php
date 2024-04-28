<?php

    namespace App\Http\Controllers;

    use App\Mail\ReservationConfirmation;
    use App\Models\Reservation;
    use Carbon\Carbon;
    use DateTime;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

    class ReservationController extends Controller
    {

   public function makeReservation(Request $request)
{
    $validator = Validator::make($request->all(), [
        'appointment_date' => 'required|date|after:today',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $appointmentDate = $request->input('appointment_date');
    $centerId = $request->input('center_id');

    DB::beginTransaction();

    try {
        if (Carbon::parse($appointmentDate)->isPast()) {
            return redirect()->back()
                ->withErrors(['appointment_date' => 'Vous ne pouvez pas réserver une date passée.'])
                ->withInput();
        }

        $reservation = Reservation::create([
            'user_id' => Auth::id(),
            'center_id' => $centerId,
            'reservation_date' => now(),
            'appointment_date' => $appointmentDate,
            'status' => Reservation::STATUS_APPROVED,
        ]);

        if ($reservation) {
            Mail::to(Auth::user()->email)->send(new ReservationConfirmation($reservation));
        }

        DB::commit();

        return redirect()->back()->with('success', 'Réservation effectuée avec succès.');
    } catch (\Exception $e) {
        DB::rollback();
        return redirect()->back()->withErrors(['error' => 'Une erreur s\'est produite lors de la réservation. Veuillez réessayer.']);
    }
}




        public function showReservations()
        {
            $reservations = Reservation::with('center', 'user')->get();
    
            return view('Admin.StaticReservation', compact('reservations'));
        }

    }
