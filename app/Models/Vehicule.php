<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{

    protected $fillable = [
        'date_achat',
        'km_default',
        'matricule',
        'chauffeur_id',
        'statut',
    ];



    use HasFactory;
}
