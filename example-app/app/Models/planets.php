<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    // Andere eigenschappen en methoden van het model
    
    public function solarSystem()
    {
        return $this->belongsTo(SolarSystem::class);
    }
}
