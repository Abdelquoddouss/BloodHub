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
        // Valider les données directement dans la méthode
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'datebirth' => 'date',
            'sex' => 'required|integer',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:8',
            'profile_image' => 'required|image|mimes:jpeg,png,jpg|max:10240',
        ]);
    
        // Convertir le sexe en valeur lisible
        $validatedData['sex'] = ($validatedData['sex'] == 1) ? 'male' : 'female';
    
        // Manipulation du téléchargement de l'image
        if ($request->hasFile('profile_image')) {
            $imagePath = $request->file('profile_image')->store('profile_images', 'public');
            $validatedData['profile_image'] = $imagePath;
        }
    
        // Créer l'utilisateur
        $user = User::create($validatedData);
    
        // Attach Media Library to User
        if ($user && $request->hasFile('profile_image')) {
            $user->addMedia($request->file('profile_image'))->toMediaCollection('profile_images');
        }
    
        // Attribuer le rôle de "donneur"
        $role = Role::where('name', 'Donneur')->first();
        if ($role) {
            $user->roles()->attach($role);
            return redirect('/login')->with('success', 'Inscription réussie. Veuillez vous connecter.');
        } else {
            // Si le rôle "Donneur" n'existe pas ou n'est pas trouvé, renvoyer une erreur
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
            // Authentication passed...
            $user = Auth::user();
            $role = $user->roles->first(); // Assuming a user can have only one role
    
            if ($role && $role->name == 'admin') {
                return redirect()->intended('/DashboardAdmin');
            } else {
                return redirect()->intended('/');
            }
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

        return redirect('/login');
    }






}
