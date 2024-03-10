<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ChauffeurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chauffeurs= Chauffeur::all();
        return view('chauffeurs.index',['chauffeurs'=>$chauffeurs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $chauffeurs= Chauffeur::all();
        return view('chauffeurs.create',['chauffers'=>$chauffeurs]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $chauffeurs= new Chauffeur();
    $chauffeurs->nom= $request->nom;
    $chauffeurs->prenom= $request->prenom;
    $chauffeurs->experience= $request->experience;
    $chauffeurs->num_permis= $request->numero_permis;
    $chauffeurs->date_emission= $request->date_d_emitiont;
    $chauffeurs->expiration_categorie= $request->Expiration_categorie;
    $chauffeurs->save();
    return redirect()->route('chauffeurs.index')->with("le chauffeurs a ete ajouter avec success");



    }

    /**
     * Display the specified resource.
     */
    public function show(Chauffeur $chauffeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $chauffeurs= Chauffeur::find($id);
        return view('chauffeurs.update',['chauffeurs'=>$chauffeurs]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    $chauffeurs=  Chauffeur::find($id);
    $chauffeurs->nom= $request->nom;
    $chauffeurs->prenom = $request->prenom;
    $chauffeurs->experience= $request->experience;
    $chauffeurs->num_permis= $request->numero_permis;
    $chauffeurs->date_emission= $request->date_d_emition;
    $chauffeurs->expiration_categorie= $request->Expiration_categorie;
    $chauffeurs->update();
    return redirect()->route('chauffeurs.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $chauffeurs= Chauffeur::find($id);
        $chauffeurs->delete();
        return redirect()->route('chauffeurs.index');
    }
}
