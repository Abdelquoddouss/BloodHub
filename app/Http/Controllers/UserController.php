<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('Admin.Static', ['users' => $users]);
    }

    public function blockUser($id)
    {
        $user = User::find($id);
        if (!$user) {
            return back()->with('error', 'Utilisateur non trouvé.');
        }
    
        $user->blocked = true; // Bloquer l'utilisateur
        $user->save();
    
        return back()->with('success', 'Utilisateur bloqué avec succès.');
    }
    
    public function unblockUser($id)
    {
        $user = User::find($id);
        if (!$user) {
            return back()->with('error', 'Utilisateur non trouvé.');
        }
    
        $user->blocked = false; // Débloquer l'utilisateur
        $user->save();
    
        return back()->with('success', 'Utilisateur débloqué avec succès.');
    }
    
}
