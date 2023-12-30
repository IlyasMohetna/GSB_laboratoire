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

    public function materielTypes()
    {
        return $this->hasMany(PosessionMateriel::class, 'id_salle', 'id_salle');
    }
}
