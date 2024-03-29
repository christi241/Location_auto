<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

    protected $guarded = ['_token'];

    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
