<?php

namespace App\Models\SALLE;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    use HasFactory;

    protected $table = 'salle__agence';
    protected $primaryKey = 'id_agence';
    protected $guarded = [];

    public function ville()
    {
        return $this->hasOne(\App\Models\PARAMETRAGE\Ville::class, 'id_ville', 'id_ville');
    }
}
