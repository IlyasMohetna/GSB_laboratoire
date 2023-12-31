<?php

namespace App\Models\SALLE;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;

    protected $table = 'salle__salle';
    protected $primaryKey = 'id_salle';
    protected $guarded = [];

    public function batiment()
    {
        return $this->hasOne(Batiment::class, 'id_batiment', 'id_batiment');    
    }

    public function reservation()
    {
        return $this->hasMany(Reservation::class, 'id_salle', 'id_salle');
    }

    public function materielTypes()
    {
        return $this->hasMany(PosessionMateriel::class, 'id_salle', 'id_salle');
    }
}
