<?php

namespace App\Models\COVOITURAGE;

use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    protected $table = 'covoiturage__trajet';
    protected $primaryKey = 'id_trajet';
    protected $guarded = [];
}
