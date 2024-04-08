<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $categories = Categorie::all();
        return view('Admin.Categorie', compact('categories'));

    }


    /**
     * Store a newly created resource in storage.
     */
    
public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
    ]);

    $categorie = new Categorie();
    $categorie->name = $validatedData['name'];
    $categorie->save();
}

  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete(); 
        
        
    }
}
