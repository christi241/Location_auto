<?php
namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Vehicule;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::all();
        return view('locations.index', ['locations' => $locations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Récupérer la liste des utilisateurs et des véhicules disponibles
        $users = User::all();
        $vehicules = Vehicule::all();

        // Passer les utilisateurs et les véhicules à la vue du formulaire d'ajout
        return view('locations.create', ['users' => $users, 'vehicules' => $vehicules]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données entrantes
        $validatedData = $request->validate([
            'vehicule_id' => 'required',
            'user_id' => 'required',
            'lieu_depart' => 'required',
            'lieu_arrive' => 'required',
            'date' => 'required|date',
            'heure_debut' => 'required|date_format:H:i',
            'heure_fin' => 'required|date_format:H:i|after:heure_debut',
        ]);

        // Création d'une nouvelle location avec les données validées
        $location = new Location();
        $location->vehicule_id = $validatedData['vehicule_id'];
        $location->user_id = $validatedData['user_id'];
        $location->lieu_depart = $validatedData['lieu_depart'];
        $location->lieu_arrive = $validatedData['lieu_arrive'];
        $location->date = $validatedData['date'];
        $location->heure_debut = $validatedData['heure_debut'];
        $location->heure_fin = $validatedData['heure_fin'];
        $location->save();

        // Redirection avec un message de succès
        return redirect()->route('locations.index')->with('success', 'Location ajoutée avec succès.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        // Récupérer la liste des utilisateurs et des véhicules disponibles
        $users = User::all();
        $vehicules = Vehicule::all();


        return view('locations.updat', compact('location', 'users', 'vehicules'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Location $location)
    {
        $request->validate([
            'vehicule_id' => 'required',
            'client' => 'required',
            'lieu_depart' => 'required',
            'lieu_arrive' => 'required',
            'date' => 'required|date',
            'heure_debut' => 'required|date_format:H:i',
            'heure_fin' => 'required|date_format:H:i|after:heure_debut',
        ]);

        $location->update($request->all());

        return redirect()->route('locations.index')->with('success', 'Location modifiée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        $location->delete();

        return redirect()->route('locations.index')->with('success', 'Location supprimée avec succès.');
    }
}
