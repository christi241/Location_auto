<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chauffeur extends Model
{
     protected $guarded =[];

    public function vehicules()
    {

        return $this->hasMany(Vehicule::class);
    }
}
