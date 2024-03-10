<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use App\Models\Chauffeur;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    /**
     * Afficher la liste des véhicules.
     */
    public function index()
    {
        $vehicules = Vehicule::all();
        return view('voitures.index', ['vehicules' => $vehicules]);
    }

    /**
     * Afficher le formulaire de création d'un nouveau véhicule.
     */
    public function create()
    {
        $chauffeurs = Chauffeur::all();
        return view('voitures.create', ['chauffeurs' => $chauffeurs]);
    }

    /**
     * Enregistrer un nouveau véhicule.
     */
    public function store(Request $request)
    {
            $vehicule = new Vehicule();
            $vehicule->date_achat = $request->input('date_achat');
            $vehicule->km_default = $request->input('km_default');
            $vehicule->matricule = $request->input('matricule');
            $vehicule->chauffeur_id = $request->input('chauffeur_id'); // Insérer uniquement l'ID du chauffeur
            $vehicule->statut = $request->input('statut');
            $vehicule->save();

        return redirect()->route('vehicules.index')->with('success', 'Véhicule ajouté avec succès.');
    }

    /**
     * Afficher les détails d'un véhicule spécifique.
     */
    public function show(Vehicule $vehicule)
    {
        return view('voitures.index', ['vehicule' => $vehicule]);
    }

    /**
     * Afficher le formulaire d'édition d'un véhicule.
     */
    public function edit(Vehicule $vehicule)
    {
        $chauffeurs = Chauffeur::all();
        return view('voitures.update', ['vehicule' => $vehicule, 'chauffeurs' => $chauffeurs]);
    }

    /**
     * Mettre à jour les informations d'un véhicule.
     */
    public function update(Request $request, Vehicule $vehicule)
    {
        $request->validate([
            'date_achat' => 'required|date',
            'km_default' => 'required|integer',
            'matricule' => 'required|unique:vehicules,matricule,' . $vehicule->id,
            'statut' => 'required',
            'chauffeur_id' => 'nullable|exists:chauffeurs,id',
        ]);

        $vehicule->update($request->all());

        return redirect()->route('vehicules.index')->with('success', 'Véhicule mis à jour avec succès.');
    }

    /**
     * Supprimer un véhicule.
     */
    public function destroy(Vehicule $vehicule)
    {
        $vehicule->delete();

        return redirect()->route('vehicules.index')->with('success', 'Véhicule supprimé avec succès.');
    }
}
