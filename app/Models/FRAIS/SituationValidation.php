<?php

namespace App\Models\FRAIS;

use Illuminate\Database\Eloquent\Model;

class SituationValidation extends Model
{
    protected $table = 'frais__situation_validation';
    protected $primaryKey = 'code_situation';
    protected $guarded = [];
}
