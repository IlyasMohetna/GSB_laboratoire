<?php

namespace App\Models\COVOITURAGE;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    protected $table = 'covoiturage__vehicule';
    protected $primaryKey = 'id_vehicule';
    protected $guarded = [];
}
