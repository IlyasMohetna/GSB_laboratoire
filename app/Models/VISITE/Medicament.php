<?php

namespace App\Models\VISITE;

use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    protected $table = 'visite__medicament';
    protected $primaryKey = 'id_medicament';
    protected $guarded = [];
}
