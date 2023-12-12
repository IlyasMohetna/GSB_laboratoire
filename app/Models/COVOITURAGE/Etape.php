<?php

namespace App\Models\COVOITURAGE;

use Illuminate\Database\Eloquent\Model;

class Etape extends Model
{
    protected $table = 'covoiturage__etape';
    protected $primaryKey = 'id_etape';
    protected $guarded = [];
}
