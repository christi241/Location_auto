<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Counter extends Component
{
    public $numberOfChauffeurs;
    public $numberOfVehicules;
    public $numberOfLocations;
    public $totalTarification;

    public function mount()
    {
        $this->numberOfChauffeurs = $this->getNumberOfChauffeurs();
        $this->numberOfVehicules = $this->getNumberOfVehicules();
        $this->numberOfLocations = $this->getNumberOfLocations();
        
    }

    public function getNumberOfChauffeurs()
    {
        return DB::table('chauffeurs')->count();
    }

    public function getNumberOfVehicules()
    {
        return DB::table('vehicules')->count();
    }

    public function getNumberOfLocations()
    {
        return DB::table('locations')->count();
    }



    public function render()
    {
        return view('livewire.counter');
    }
}
