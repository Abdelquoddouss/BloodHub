<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('Auth.Register');
    }


    public function StoreRegister(RegisterUserRequest $request)
    {
        $validatedata = $request->validated();
        // Convert the gender value from 1 or 2 to male or female
        $validatedata['sex'] = ($validatedata['sex'] == 1) ? 'male' : 'female';
        $user = User::create($validatedata);
        // Attribuer automatiquement le rôle de "donneur" à tous les utilisateurs
        $role = Role::where('name', 'Donneur')->first();
        if ($role) {
            $user->roles()->attach($role);
        } else {
            return "error";
        }
        return redirect('/login')->with('success', 'Inscription réussie. Veuillez vous connecter.');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/DashboardAdmin');
        } else {
            // Authentication failed...
            return back()->withErrors(['email' => 'Invalid credentials']); 
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }






}
