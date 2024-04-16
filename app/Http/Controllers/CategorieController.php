<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class CategorieController extends Controller
{

    public function index()
    {
      $categories = Categorie::all();
        return view('Admin.Categorie', compact('categories'));

    }
    public function indexCenter()
    {
        $categories = Categorie::all();
        
        return view('Center', compact('categories'));
    }

    public function create()
    {
        $categories = Categorie::all();
        return view('Admin.AddCenter', compact('categories'));
        }


    
public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
    ]);

    $categorie = new Categorie();
    $categorie->name = $validatedData['name'];
    $categorie->save();

    return redirect()->route('categories.index')->with('success', 'Categorie created successfully');
}

    public function destroy($id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->delete();
        return redirect()->route('categories.index')->with('danger', 'Categorie deleted successfully');        
    }
}
