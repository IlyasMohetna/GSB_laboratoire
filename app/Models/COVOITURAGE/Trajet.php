<?php

namespace App\Models\COVOITURAGE;

use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    protected $table = 'covoiturage__trajet';
    protected $primaryKey = 'id_trajet';
    protected $guarded = [];

    public function automobiliste()
    {
        return $this->hasOne(\App\Models\User::class, 'code_employe', 'code_employe');
    }

    public function etapes()
    {
        return $this->hasMany(Etape::class, 'id_trajet');
    }
}
