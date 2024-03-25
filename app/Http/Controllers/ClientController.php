<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::paginate(6);
        return view('Clients.clients', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Clients.createclient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'reseau_social' => 'required|string|max:255',
'nom' => 'required|string|max:255',
'prenom' => 'required|string|max:255',
'email' => 'required|string|max:255',
'ville' => 'required|string|max:255',
'adress' => 'required|string|max:255',
'tel' => 'required|string|max:255',
'created_by' => 'required|string|max:255',
'updated_by' => 'required|string|max:255',

            ]
        );


        Client::create($request->all());

        return redirect()->route('Clients.clients')->with('success', 'client created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $clients , $id)
    {
        $clients = Client::findOrFail($id);
        return view('Clients.editclient', compact('clients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'reseau_social' => 'required|string|max:255',
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'ville' => 'required|string|max:255',
        'adress' => 'required|string|max:255',
        'tel' => 'required|string|max:255',
        'ICE' => 'required|numeric|max:255',
        'created_by' => 'required|string|max:255',
        'updated_by' => 'required|string|max:255',
    ]);

    Client::findOrFail($id)->update($validatedData);

    return redirect()->route('Clients.clients')->with('success', 'Client updated successfully.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $clients = Client::findOrFail($id);
        $clients->delete();

        return redirect()->route('Clients.clients')->with('success', 'client deleted successfully.');
    }
}
