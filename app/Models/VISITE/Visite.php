<?php

namespace App\Models\VISITE;

use Illuminate\Database\Eloquent\Model;

class Visite extends Model
{
    protected $table = 'visite__visite';
    protected $primaryKey = 'id_visite';
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
}
