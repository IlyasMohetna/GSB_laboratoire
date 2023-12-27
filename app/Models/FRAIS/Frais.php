<?php

namespace App\Models\FRAIS;

use Illuminate\Database\Eloquent\Model;

class Frais extends Model
{
    protected $table = 'frais__frais';
    protected $primaryKey = 'id_frais';
    protected $guarded = [];
    protected $casts = [
        'date_frais' => 'date'
    ];

    public function situation()
    {
        return $this->hasOne(SituationValidation::class, 'code_situation', 'code_situation');
    }

    public function comptable()
    {
        return $this->hasOne(\App\Models\User::class, 'code_employe', 'code_employe_comptable');
    }

    public function visite()
    {
        return $this->hasOne(\App\Models\VISITE\Visite::class, 'id_visite', 'id_visite');
    }

    public function ged()
    {
        return $this->hasMany(Justificative::class, 'id_frais', 'id_frais');
    }

    public function nature()
    {
        return $this->hasOne(Nature::class, 'id_nature', 'id_nature');
    }
}
