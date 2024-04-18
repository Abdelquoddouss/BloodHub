<?php

namespace App\Http\Controllers;

use App\Models\BloodDonationQuestion;
use Illuminate\Http\Request;

class QuizzController extends Controller
{
    public function showQuizView()
    {
        // Récupérer toutes les questions avec leurs réponses associées
        $questions = BloodDonationQuestion::with('answers')->get();

        if ($questions->isEmpty()) {
            return redirect()->route('home')->with('error', 'Aucune question trouvée pour le quiz.');
        }

        return view('Test', ['questions' => $questions]);
    }

    
}
