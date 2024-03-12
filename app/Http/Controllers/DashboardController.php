<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vehicule;
use App\Models\User;


class DashboardController extends Controller
{
    public function index()
    {
        // Récupérer les informations du candidat (ajustez cela selon vos besoins)
        $vehicules = Vehicule::all();



        // Passer les données à la vue
        return view('clients.dashbordClient', compact('vehicules'));
    }


    public function detailsVoit()
    {
        // Récupérer les informations du candidat (ajustez cela selon vos besoins)
        $vehicules = Vehicule::all();



        // Passer les données à la vue
        return view('clients.detaillevoit', compact('vehicules'));
    }


    public function location()
    {
        // Récupérer les informations du candidat (ajustez cela selon vos besoins)
        $vehicules = Vehicule::all();

        $users= User::all();



        // Passer les données à la vue
        return view('clients.locationvoit', compact('vehicules','users'));
    }
}
