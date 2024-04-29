<?php

namespace App\Http\Controllers;

use App\Http\Requests\CenterRequest;
use App\Models\BloodDonationResult;
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
    public function show($id)
    {

        $center = Center::findOrFail($id);
        $categories = Categorie::all();
        $latestCenters = Center::where('id', '!=', $id)->latest()->take(2)->get();
        return view('ShowCenter', compact('center', 'categories', 'latestCenters'));

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
            $center->clearMediaCollection('files');
    
            foreach ($request->file('files') as $file) {
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


    public function filterCenters(Request $request)
{

    $querySearch = $request->input('query');
    $centers = Center::with('category');

    if ($querySearch) {
        $centers = $centers->where('nom', 'like', "%$querySearch%")
        ->orWhereHas('category', function ($query) use ($querySearch) {
            $query->where('name', 'like', "%$querySearch%");
        });
    }

    $results = $centers->get();

    $results->each(function ($center) {
        $center['cover'] = $center->getFirstMediaUrl('files');
    });

    return $results;
}

public function ViewsCenter(){

    $centers = Center::latest()->limit(3)->get();

    return view('welcome', compact('centers'));
}

    
    
    

}
