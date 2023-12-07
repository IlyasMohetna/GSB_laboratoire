<?php

namespace App\Models\PARAMETRAGE;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    protected $table = 'parametrage__ville';
    protected $primaryKey = 'id_ville';
    protected $guarded = [];
}
