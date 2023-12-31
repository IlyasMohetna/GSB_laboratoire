<?php

namespace App\Models\COVOITURAGE;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    protected $table = 'covoiturage__vehicule';
    protected $primaryKey = 'id_vehicule';
    protected $guarded = [];

    public function trajets()
    {
        return $this->hasMany(Trajet::class, 'id_vehicule', 'id_vehicule');
    }

    public function agence()
    {
        return $this->hasOne(\App\Models\SALLE\Agence::class, 'id_agence', 'id_agence');
    }
}
