<?php

namespace App\Models\VISITE;

use Illuminate\Database\Eloquent\Model;

class PresentationMedicament extends Model
{
    protected $table = 'visite__presentation_medicament';
    protected $guarded = [];

    public function medicament()
    {
        return $this->HasOne(Medicament::class, 'id_medicament' , 'id_medicament');
    }
}
