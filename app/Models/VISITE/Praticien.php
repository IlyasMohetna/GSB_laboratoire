<?php

namespace App\Models\VISITE;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Praticien extends Model
{
    use HasFactory;

    protected $table = 'visite__praticien';
    protected $primaryKey = 'id_praticien';
    protected $guarded = [];

    public function ville()
    {
        return $this->hasOne(\App\Models\PARAMETRAGE\Ville::class, 'id_ville', 'id_ville');
    }
}
