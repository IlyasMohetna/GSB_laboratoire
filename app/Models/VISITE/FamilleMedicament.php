<?php

namespace App\Models\VISITE;

use Illuminate\Database\Eloquent\Model;

class FamilleMedicament extends Model
{
    protected $table = 'visite__famille_medicament';
    protected $primaryKey = 'id_famille';
    protected $guarded = [];
}
