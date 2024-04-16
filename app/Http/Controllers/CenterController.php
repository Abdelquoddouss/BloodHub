<?php

namespace App\Http\Controllers;

use App\Http\Requests\CenterRequest;
use App\Models\Categorie;
use App\Models\Center;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centers = Center::all();
        return view('Admin.AffCenter', compact('centers'));
    }

    public function paginateCenters()
    {
        $centers = Center::paginate(4);
        $categories = Categorie::all(); 
        return view('Center', compact('centers','categories'));
    }

    /** 
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('Admin.AddCenter', compact('categories'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(CenterRequest $request)
    {
        $center = new Center;
        $center->nom = $request->nom;
        $center->adresse = $request->adresse;
        $center->email = $request->email;
        $center->phone = $request->phone;
        $center->description = $request->description;
        $center->overture = $request->overture;
        $center->fermeture = $request->fermeture;
        $center->category_id = $request->category_id;
    
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $center->addMedia($file)->toMediaCollection('files');
            }
        }
    
        $center->save();
        return redirect()->route('centers.index')->with('success', 'Center registered successfully');
    }
    
    
    

    /**
     * Display the specified resource.
     */
    public function show(Center $center)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $center = Center::findOrFail($id);
        $categories = Categorie::all();
        return view('Admin.EditCenter', compact('center', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CenterRequest $request, $id)
    {
        $center = Center::findOrFail($id);
        $center->nom = $request->nom;
        $center->adresse = $request->adresse;
        $center->email = $request->email;
        $center->phone = $request->phone;
        $center->description = $request->description;
        $center->overture = $request->overture;
        $center->fermeture = $request->fermeture;
        $center->category_id = $request->category_id;
        if ($request->hasFile('files')) {
            // Supprimer les fichiers existants avant d'ajouter de nouveaux fichiers
            $center->clearMediaCollection('files');
    
            foreach ($request->file('files') as $file) {
                // Stocker ou mettre à jour le fichier en utilisant Spatie Media Library
                $center->addMedia($file)->toMediaCollection('files');
            }
        }
        $center->save();
        return redirect()->route('centers.index')->with('success', 'Center updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Center $center)
    {
        $center->delete();
        return redirect()->route('centers.index')->with('success', 'Center deleted successfully');
    }
}
