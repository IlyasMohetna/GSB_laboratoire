<?php

namespace App\Models\SALLE;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'salle__reservation';
    protected $primaryKey = 'id_reservation';
    protected $guarded = [];
    protected $casts = [
        'date_debut_reservation' => 'datetime',
        'date_fin_reservation' => 'datetime'
    ];

    public function salle()
    {
        return $this->hasOne(Salle::class, 'id_salle', 'id_salle');
    }

    public function employe()
    {
        return $this->hasOne(\App\Models\User::class, 'code_employe', 'code_employe');
    }

    public function extra()
    {
        return $this->hasOne(Extra::class, 'id_extra', 'id_extra');
    }
}
