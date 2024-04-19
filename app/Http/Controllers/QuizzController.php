<?php

namespace App\Http\Controllers;

use App\Models\BloodDonationQuestion;
use App\Models\BloodDonationResult;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class QuizzController extends Controller
{
    public function showQuizView()
    {



        $questions = BloodDonationQuestion::with('answers')->get();

        if ($questions->isEmpty()) {
            return redirect()->route('home')->with('error', 'Aucune question trouvée pour le quiz.');
        }

        return view('Test', ['questions' => $questions]);
    }


    public function submitQuiz(Request $request)
    {
        $answers = $request->input('answer');
        $questions = BloodDonationQuestion::all();
        $score = 0;
    
        foreach ($questions as $question) {
            $correctAnswer = $question->answer;
            if (isset($answers[$question->id]) && $answers[$question->id] == $correctAnswer) {
                $score++;
            } else {
                $score--;
            }
        }
    
        info("Final Score: $score");
    
        $userId = Auth::user()->id; // Utilisation de Auth::user()->id pour récupérer l'ID de l'utilisateur
    
        $userResult = BloodDonationResult::where('user_id', $userId)->first();
    
        if ($userResult) {
            $userResult->score = $score;
            $userResult->save();
        } else {
            BloodDonationResult::create([
                'user_id' => $userId,
                'score' => $score,
            ]);
        }
    
        $message = '';
    
        if ($score < $questions->count()) {
            $message = 'Désolé, vous ne pouvez pas donner de sang car vous avez répondu incorrectement.';
        } else {
            $message = 'Félicitations, vous pouvez maintenant donner votre sang!';
        }
    
        return redirect()->route('quiz.result')->with('message', $message);
    }
    
    
    public function showQuizResult()
    {
        $userId = Auth::id();
        $testResult = BloodDonationResult::where('user_id', $userId)->first();
    
        if (!$testResult) {
            return redirect()->route('quiz')->with('message', 'Vous devez d\'abord passer le test.');
        }
    
        $questions = BloodDonationQuestion::all();
        $score = $testResult->score;
    
        $message = $score < $questions->count() ? 'Désolé, vous ne pouvez pas donner de sang car vous avez répondu incorrectement.' : 'Félicitations, vous pouvez maintenant donner votre sang!';
    
        return view('QuizResult', compact('testResult', 'message'));
    }


    function indexResult()
    {
        $results =  BloodDonationResult::all();
        return view('Admin.StaticTest', compact('results'));
    }

    
}
