<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class AuthController extends Controller
{
    public function index(){
        return view('Auth.Register');
    }

    public function StoreRegister(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'datebirth' => 'date',
            'sex' => 'required|integer',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:8',
            'profile_image' => 'required|image|mimes:jpeg,png,jpg|max:10240',
        ]);
    
        $validatedData['sex'] = ($validatedData['sex'] == 1) ? 'male' : 'female';
    
        if ($request->hasFile('profile_image')) {
            $imagePath = $request->file('profile_image')->store('profile_images', 'public');
            $validatedData['profile_image'] = $imagePath;
        }
    
        $user = User::create($validatedData);
    
        if ($user && $request->hasFile('profile_image')) {
            $user->addMedia($request->file('profile_image'))->toMediaCollection('profile_images');
        }
    
        $role = Role::where('name', 'Donneur')->first();
        if ($role) {
            $user->roles()->attach($role);
            return redirect('/login')->with('success', 'Inscription réussie. Veuillez vous connecter.');
        } else {
            return redirect()->back()->with('error', 'Erreur lors de l\'attribution du rôle Donneur.');
        }
    }
    

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->blocked) {
                Auth::logout();
                return back()->withErrors(['email' => 'Your account is blocked by the admin.']);
            }
    
            $role = $user->roles->first(); 
            if ($role && $role->name == 'admin') {
                return redirect()->intended('/Static');
            } else {
                return redirect()->intended('/');
            }
        } else {
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
