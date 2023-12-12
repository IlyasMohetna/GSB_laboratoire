<?php

namespace App\Models\COVOITURAGE;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'covoiturage__reservation';
    protected $primaryKey = 'id_reservation';
    protected $guarded = [];
}
