<?php

namespace App\Models\SALLE;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterielType extends Model
{
    use HasFactory;

    protected $table = 'salle__materiel_type';
    protected $primaryKey = 'id_materiel';
    protected $guarded = [];
}
