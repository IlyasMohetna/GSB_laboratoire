<?php

namespace App\Models\VISITE;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visite extends Model
{
    use HasFactory;
    
    protected $table = 'visite__visite';
    protected $primaryKey = 'id_visite';
    protected $casts = [
        'date_debut_visite' => 'datetime',
        'date_fin_visite' => 'datetime'
    ];
    protected $guarded = [];

    public function visiteur()
    {
        return $this->hasOne(\App\Models\User::class, 'code_employe', 'code_employe');
    }

    public function praticien()
    {
        return $this->hasOne(Praticien::class, 'id_praticien', 'id_praticien');
    }

    public function medicaments()
    {
        return $this->hasMany(PresentationMedicament::class, 'id_visite', 'id_visite');
    }

    public function frais()
    {
        return $this->hasMany(\App\Models\FRAIS\Frais::class, 'id_visite', 'id_visite');
    }

    public function ged()
    {
        return $this->HasManyThrough(\App\Models\FRAIS\Justificative::class, \App\Models\FRAIS\Frais::class, 'id_visite', 'id_frais', 'id_visite', 'id_frais');
    }
}
