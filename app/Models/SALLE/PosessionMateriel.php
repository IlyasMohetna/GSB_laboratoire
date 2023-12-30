<?php

namespace App\Models\SALLE;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosessionMateriel extends Model
{
    use HasFactory;

    protected $table = 'salle__posession_materiel';
    protected $guarded = [];
}