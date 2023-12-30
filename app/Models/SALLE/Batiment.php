<?php

namespace App\Models\SALLE;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batiment extends Model
{
    use HasFactory;

    protected $table = 'salle__batiment';
    protected $primaryKey = 'id_batiment';
    protected $guarded = [];
}
