<?php
// app/Planets.php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planets extends Model
{
    protected $fillable = [
        'name',
        // Voeg hier andere bewerkbare velden toe indien nodig
    ];

    public function solarSystem()
    {
        return $this->belongsTo(SolarSystem::class);
    }
    
    
}
?>