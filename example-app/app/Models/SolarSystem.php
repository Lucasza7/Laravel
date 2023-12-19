<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolarSystem extends Model
{
    // Andere eigenschappen en methoden van het model
    
    public function planets()
    {
        return $this->hasMany(Planets::class);
    }

    
}
