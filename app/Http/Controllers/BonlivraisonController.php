<?php

namespace App\Http\Controllers;

use App\Models\Bonlivraison;
use App\Models\Client;
use Illuminate\Http\Request;

class BonlivraisonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bonlivraisons = Bonlivraison::paginate(6);
        return view('Bonlivraisons.bonlivraison', compact('bonlivraisons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bonlivraison = Bonlivraison::all(); // Fetch all villes
        $clients = Client::all();
    return view('Bonlivraisons.createbonlivraison', compact('bonlivraison' , 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'regle' => 'required|boolean',
            'client_id' => 'required|exists:clients,id',
            'created_by' => 'required|string|max:255',
            'updated_by' => 'required|string|max:255',
        ]);

        Bonlivraison::create($request->all());

        return redirect()->route('bonlivraisons.index')->with('success', 'Bonlivraison created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bonlivraison $bonlivraison)
    {
        // return view('Bonlivraisons.show', compact('bonlivraison'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $bonlivraison = Bonlivraison::findOrFail($id);
    $clients = Client::all();
    return view('Bonlivraisons.editbonlivraison', compact('bonlivraison', 'clients'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'date' => 'required|date',
            'regle' => 'required|boolean',
            'client_id' => 'required|exists:clients,id',
            'created_by' => 'required|string|max:255',
            'updated_by' => 'required|string|max:255',
        ]);

        $bonlivraison = Bonlivraison::findOrFail($id);

        $bonlivraison->update($request->all());

        return redirect()->route('bonlivraisons.index')->with('success', 'Bonlivraison updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bonlivraison = Bonlivraison::findOrFail($id);
        $bonlivraison->delete();

        return redirect()->route('bonlivraisons.index')->with('success', 'Bonlivraison deleted successfully.');
    }
}
