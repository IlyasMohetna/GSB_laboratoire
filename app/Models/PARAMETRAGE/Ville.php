<?php

namespace App\Models\PARAMETRAGE;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    protected $table = 'parametrage__ville';
    protected $primaryKey = 'id_ville';
    protected $guarded = [];

    public function departement()
    {
        return $this->hasOne(Departement::class, 'departement_id', 'departement_id');
    }
}
